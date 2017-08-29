<?php
App::uses('AppController', 'Controller');
/**
 * BookTypes Controller
 *
 * @property BookType $BookType
 * @property PaginatorComponent $Paginator
 */
class BookTypesController extends AppController {

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
		$this->BookType->recursive = 0;
		$this->set('bookTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BookType->exists($id)) {
			throw new NotFoundException(__('Invalid book type'));
		}
		$options = array('conditions' => array('BookType.' . $this->BookType->primaryKey => $id));
		$this->set('bookType', $this->BookType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BookType->create();
			if ($this->BookType->save($this->request->data)) {
				$this->Flash->success(__('The book type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The book type could not be saved. Please, try again.'));
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
		if (!$this->BookType->exists($id)) {
			throw new NotFoundException(__('Invalid book type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BookType->save($this->request->data)) {
				$this->Flash->success(__('The book type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The book type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BookType.' . $this->BookType->primaryKey => $id));
			$this->request->data = $this->BookType->find('first', $options);
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
		$this->BookType->id = $id;
		if (!$this->BookType->exists()) {
			throw new NotFoundException(__('Invalid book type'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BookType->delete()) {
			$this->Flash->success(__('The book type has been deleted.'));
		} else {
			$this->Flash->error(__('The book type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
