<?php
App::uses('AppController', 'Controller');
/**
 * Reviews Controller
 *
 * @property Review $Review
 * @property PaginatorComponent $Paginator
 */
class ReviewsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

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
		$this->Review->recursive = 0;
		$this->set('reviews', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Review->exists($id)) {
			throw new NotFoundException(__('Invalid review'));
		}
		$options = array('conditions' => array('Review.' . $this->Review->primaryKey => $id));
		$authUser = $this->Auth->user();
		$this->set('review', $this->Review->find('first', $options));
		$this->set(compact('authUser'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Review->create();
			if ($this->Review->save($this->request->data)) {
				$this->Flash->success(__('Your review has been submitted. Thank you for your contribution.'));
				return $this->redirect(array('controller' => 'pages', 'action' => 'home'));
			} else {
				$this->Flash->error(__('The review could not be saved. Please, try again.'));
			}
		}
		if(isset($_GET['bookName'])) {
			$addedBook = $_GET['bookName'];
		}
		$today = date('Y-m-d');
		$books = $this->Review->Book->find('list', array('fields' => 'book_name'));
		$reviewTypes = $this->Review->ReviewType->find('list', array('fields' => 'name'));
		$users = $this->Review->User->find('list');
		$authUser = $this->Auth->user();
		$this->set(compact('books', 'reviewTypes', 'users', 'authUser', 'today', 'addedBook'));
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
		if (!$this->Review->exists($id)) {
			throw new NotFoundException(__('Invalid review'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Review->save($this->request->data)) {
				$this->Flash->success(__('Your review has been submitted. Thank you for your contribution.'));
				return $this->redirect(array('controller' => 'users', 'action' => 'view', $this->params['pass'][0] => $this->request->data['Review']['user_id']));
			} else {
				$this->Flash->error(__('The review could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Review.' . $this->Review->primaryKey => $id));
			$this->request->data = $this->Review->find('first', $options);
//			if($this->Auth->user('Role.name') != 'Administrator' || $this->Auth->user('id') != $this->request->data['Review']['user_id']) {
//				$this->Flash->error('You are not authorized to visit that page');
//				$this->redirect('/');
//			}
		}
		$books = $this->Review->Book->find('list', array('fields' => 'book_name'));
		$reviewTypes = $this->Review->ReviewType->find('list', array('fields' => 'name'));
		$users = $this->Review->User->find('list');
		$authUser = $this->Auth->user();
		$this->set(compact('books', 'reviewTypes', 'users', 'authUser'));
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
		$this->Review->id = $id;
		if (!$this->Review->exists()) {
			throw new NotFoundException(__('Invalid review'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Review->delete()) {
			$this->Flash->success(__('The review has been deleted.'));
		} else {
			$this->Flash->error(__('The review could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller' => 'pages', 'action' => 'home'));
	}
}
