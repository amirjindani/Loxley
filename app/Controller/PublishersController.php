<?php
App::uses('AppController', 'Controller');
/**
 * Publishers Controller
 *
 * @property Publisher $Publisher
 * @property PaginatorComponent $Paginator
 */
class PublishersController extends AppController {

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
		$this->Publisher->recursive = 0;
		$this->set('publishers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		//prevent any but admin users from accessing administrative pages
		if($this->Auth->user('Role.name') != 'Administrator') {
			$this->Flash->error('You are not authorized to visit that page');
			$this->redirect('/');
		}
		if (!$this->Publisher->exists($id)) {
			throw new NotFoundException(__('Invalid publisher'));
		}
		$options = array('conditions' => array('Publisher.' . $this->Publisher->primaryKey => $id));
		$this->set('publisher', $this->Publisher->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//prevent any but admin users from accessing administrative pages
		if($this->Auth->user('Role.name') != 'Administrator') {
			$this->Flash->error('You are not authorized to visit that page');
			$this->redirect('/');
		}
		if ($this->request->is('post')) {
			$this->Publisher->create();
			if ($this->Publisher->save($this->request->data)) {
				$this->Flash->success(__('The publisher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The publisher could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		//prevent any but admin users from accessing administrative pages
		if($this->Auth->user('Role.name') != 'Administrator') {
			$this->Flash->error('You are not authorized to visit that page');
			$this->redirect('/');
		}
		if (!$this->Publisher->exists($id)) {
			throw new NotFoundException(__('Invalid publisher'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Publisher->save($this->request->data)) {
				$this->Flash->success(__('The publisher has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The publisher could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Publisher.' . $this->Publisher->primaryKey => $id));
			$this->request->data = $this->Publisher->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		//prevent any but admin users from accessing administrative pages
		if($this->Auth->user('Role.name') != 'Administrator') {
			$this->Flash->error('You are not authorized to visit that page');
			$this->redirect('/');
		}
		$this->Publisher->id = $id;
		if (!$this->Publisher->exists()) {
			throw new NotFoundException(__('Invalid publisher'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Publisher->delete()) {
			$this->Flash->success(__('The publisher has been deleted.'));
		} else {
			$this->Flash->error(__('The publisher could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
