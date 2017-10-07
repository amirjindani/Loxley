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
		$this->set('user', $this->User->find('first', $options));
		$this->set(compact('authUser'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('controller'=>'pages','action' => 'home'));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
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
		$schools = $this->User->School->find('list');
		$publishers = $this->User->Publisher->find('list');
		$authUser = $this->Auth->user();
		$this->set(compact('roles', 'schools', 'publishers', 'authUser'));
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
			if ($this->User->save($this->request->data)) {
				$this->Flash->success(__('The user has been saved.'));
				return $this->redirect(array('action' => 'view', $this->params['pass'][0] => $this->request->data['User']['id']));
			} else {
				$this->Flash->error(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		
		$roles = $this->User->Role->find('list');
		$schools = $this->User->School->find('list');
		$publishers = $this->User->Publisher->find('list');
		$authUser = $this->Auth->user();
		$this->set(compact('roles', 'schools', 'publishers', 'authUser'));
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
			$this->Flash->success(__('The user has been deleted.'));
		} else {
			$this->Flash->error(__('The user could not be deleted. Please, try again.'));
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
