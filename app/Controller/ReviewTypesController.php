<?php
App::uses('AppController', 'Controller');
/**
 * ReviewTypes Controller
 *
 * @property ReviewType $ReviewType
 * @property PaginatorComponent $Paginator
 */
class ReviewTypesController extends AppController {

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
		$this->ReviewType->recursive = 0;
		$this->set('reviewTypes', $this->Paginator->paginate());
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
		if (!$this->ReviewType->exists($id)) {
			throw new NotFoundException(__('Invalid review type'));
		}
		$options = array('conditions' => array('ReviewType.' . $this->ReviewType->primaryKey => $id));
		$this->set('reviewType', $this->ReviewType->find('first', $options));
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
			$this->ReviewType->create();
			if ($this->ReviewType->save($this->request->data)) {
				$this->Flash->success(__('The review type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The review type could not be saved. Please, try again.'));
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
		if (!$this->ReviewType->exists($id)) {
			throw new NotFoundException(__('Invalid review type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ReviewType->save($this->request->data)) {
				$this->Flash->success(__('The review type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The review type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ReviewType.' . $this->ReviewType->primaryKey => $id));
			$this->request->data = $this->ReviewType->find('first', $options);
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
		$this->ReviewType->id = $id;
		if (!$this->ReviewType->exists()) {
			throw new NotFoundException(__('Invalid review type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ReviewType->delete()) {
			$this->Flash->success(__('The review type has been deleted.'));
		} else {
			$this->Flash->error(__('The review type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
