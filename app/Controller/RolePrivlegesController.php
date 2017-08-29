<?php
App::uses('AppController', 'Controller');
/**
 * RolePrivleges Controller
 *
 * @property RolePrivlege $RolePrivlege
 * @property PaginatorComponent $Paginator
 */
class RolePrivlegesController extends AppController {

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
		$this->RolePrivlege->recursive = 0;
		$this->set('rolePrivleges', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RolePrivlege->exists($id)) {
			throw new NotFoundException(__('Invalid role privlege'));
		}
		$options = array('conditions' => array('RolePrivlege.' . $this->RolePrivlege->primaryKey => $id));
		$this->set('rolePrivlege', $this->RolePrivlege->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RolePrivlege->create();
			if ($this->RolePrivlege->save($this->request->data)) {
				$this->Flash->success(__('The role privlege has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The role privlege could not be saved. Please, try again.'));
			}
		}
		$roles = $this->RolePrivlege->Role->find('list');
		$privileges = $this->RolePrivlege->Privilege->find('list');
		$this->set(compact('roles', 'privileges'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RolePrivlege->exists($id)) {
			throw new NotFoundException(__('Invalid role privlege'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RolePrivlege->save($this->request->data)) {
				$this->Flash->success(__('The role privlege has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The role privlege could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RolePrivlege.' . $this->RolePrivlege->primaryKey => $id));
			$this->request->data = $this->RolePrivlege->find('first', $options);
		}
		$roles = $this->RolePrivlege->Role->find('list');
		$privileges = $this->RolePrivlege->Privilege->find('list');
		$this->set(compact('roles', 'privileges'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RolePrivlege->id = $id;
		if (!$this->RolePrivlege->exists()) {
			throw new NotFoundException(__('Invalid role privlege'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RolePrivlege->delete()) {
			$this->Flash->success(__('The role privlege has been deleted.'));
		} else {
			$this->Flash->error(__('The role privlege could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
