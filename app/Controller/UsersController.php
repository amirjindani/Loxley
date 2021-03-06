<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');
	
	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to register and logout.
		$this->Auth->allow('add', 'logout');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		//prevent any but admin users from accessing administrative pages
		if($this->Auth->user('Role.name') != 'Administrator') {
			$this->Flash->error('You are not authorized to visit that page');
			$this->redirect('/');
		}
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$authUser = $this->Auth->user();
		//prevent any but admin users from accessing administrative pages
		if($this->Auth->user('Role.name') != 'Administrator') {
			if($this->Auth->user('id') != $id) {
				$this->Flash->error('You are not authorized to visit that page');
				$this->redirect('/');
			}
		}
		$this->loadModel('BookSubject');
		$this->BookSubject->recursive = -1;
		$bookSubjects = $this->BookSubject->find('all', array(
			'fields' => array('id','name'),
		));
		$this->set('user', $this->User->find('first', $options));
		$this->set(compact('authUser','bookSubjects'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			//check to see if a new password has been entered
			if(!empty($new_password = $this->request->data['User']['password'])) {
				//if so, make sure that new password has been confirmed
				if($new_password == $this->request->data['User']['password_confirm']) {
					$this->request->data['User']['password'] = $new_password;
				} else {
					//if not set variable which prevents save
					$failedPasswordMatch = 1;
				}
			}
			$this->User->create();
			if(!isset($failedPasswordMatch)) {
				if ($this->User->save($this->request->data)) {
					$this->Flash->success(__('You have successfully created an account. Please, log in to continue.'));
					return $this->redirect(array('controller'=>'pages','action' => 'home'));
				} else {
					$this->Flash->error(__('Your account could not be created. Please, try again.'));
				}
			} else {
				$this->Flash->error(__('Your account could not be created. Please, try again.'));
			}
		}
		$roles = $this->User->Role->find('list');
		$index1 = array_search('Administrator',$roles);
		if($index1 !== FALSE){
			unset($roles[$index1]);
		}
		$index2 = array_search('Student',$roles);
		if($index2 !== FALSE){
			unset($roles[$index2]);
		}
		$this->User->School->recursive = -1;
		$schoolOptions = $this->User->School->find('all', array(
			'fields' => array('id','name'),
		));
		$this->loadModel('BookSubject');
		$this->BookSubject->recursive = -1;
		$subjectOptions = $this->BookSubject->find('all', array(
			'fields' => array('id','name'),
		));
		$publishers = $this->User->Publisher->find('list');
		$authUser = $this->Auth->user();
		$this->set(compact('roles', 'schoolOptions', 'publishers', 'authUser', 'subjectOptions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		//prevent any but admins or the user who created the review from this action
//		if($this->Auth->user('Role.name') != 'Administrator' || $this->Auth->user('id') != $id) {
//			$this->Flash->error('You are not authorized to visit that page');
//			$this->redirect('/');
//		}
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			//check to see if a new password has been entered
			if(!empty($new_password = $this->request->data['User']['new_password'])) {
				//if so, make sure that new password has been confirmed
				if($new_password == $this->request->data['User']['new_password_confirm']) {
					$this->request->data['User']['password'] = $new_password;
				} else {
					//if not set variable which prevents save
					$failedPasswordMatch = 1;
				}
			}
			if(!isset($failedPasswordMatch)) {
				if ($this->User->save($this->request->data)) {
					$this->Flash->success(__('Your account has been successfully updated.'));
					return $this->redirect(array('action' => 'view', $this->params['pass'][0] => $this->request->data['User']['id']));
				} else {
					$this->Flash->error(__('Your account could not be updated. Please, try again.'));
				}
			} else {
				$this->Flash->error(__('Your account could not be updated. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$this->loadModel('BookSubject');
		$this->BookSubject->recursive = -1;
		$subjectOptions = $this->BookSubject->find('all');
		$options = array();
		foreach($subjectOptions as $subjectOption){
			$options[] = array(
				'value'=>$subjectOption['BookSubject']['id'],
				'name' => $subjectOption['BookSubject']['name']
			);
		}
		$roles = $this->User->Role->find('list');
		$schools = $this->User->School->find('list');
		$publishers = $this->User->Publisher->find('list');
		$authUser = $this->Auth->user();
		$this->set(compact('roles', 'schools', 'publishers', 'authUser', 'options', 'id'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		//prevent any but admins or the user who created the review from this action
		if($this->Auth->user('Role.name') != 'Administrator' || $this->Auth->user('id') != $id) {
			$this->Flash->error('You are not authorized to visit that page');
			$this->redirect('/');
		}
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Flash->success(__('User account deleted.'));
		} else {
			$this->Flash->error(__('User could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller' => 'pages', 'action' => 'home'));
	}

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(__('Invalid username or password, try again'));
		}
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}
}
