<?php
App::uses('AppController', 'Controller');
/**
 * Privileges Controller
 *
 * @property Privilege $Privilege
 * @property PaginatorComponent $Paginator
 */
class PrivilegesController extends AppController {

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
		$this->Privilege->recursive = 0;
		$this->set('privileges', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Privilege->exists($id)) {
			throw new NotFoundException(__('Invalid privilege'));
		}
		$options = array('conditions' => array('Privilege.' . $this->Privilege->primaryKey => $id));
		$this->set('privilege', $this->Privilege->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Privilege->create();
			if ($this->Privilege->save($this->request->data)) {
				$this->Flash->success(__('The privilege has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The privilege could not be saved. Please, try again.'));
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
		if (!$this->Privilege->exists($id)) {
			throw new NotFoundException(__('Invalid privilege'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Privilege->save($this->request->data)) {
				$this->Flash->success(__('The privilege has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The privilege could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Privilege.' . $this->Privilege->primaryKey => $id));
			$this->request->data = $this->Privilege->find('first', $options);
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
		$this->Privilege->id = $id;
		if (!$this->Privilege->exists()) {
			throw new NotFoundException(__('Invalid privilege'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Privilege->delete()) {
			$this->Flash->success(__('The privilege has been deleted.'));
		} else {
			$this->Flash->error(__('The privilege could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
