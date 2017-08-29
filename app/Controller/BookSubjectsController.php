<?php
App::uses('AppController', 'Controller');
/**
 * BookSubjects Controller
 *
 * @property BookSubject $BookSubject
 * @property PaginatorComponent $Paginator
 */
class BookSubjectsController extends AppController {

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
		$this->BookSubject->recursive = 0;
		$this->set('bookSubjects', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->BookSubject->exists($id)) {
			throw new NotFoundException(__('Invalid book subject'));
		}
		$options = array('conditions' => array('BookSubject.' . $this->BookSubject->primaryKey => $id));
		$this->set('bookSubject', $this->BookSubject->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->BookSubject->create();
			if ($this->BookSubject->save($this->request->data)) {
				$this->Flash->success(__('The book subject has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The book subject could not be saved. Please, try again.'));
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
		if (!$this->BookSubject->exists($id)) {
			throw new NotFoundException(__('Invalid book subject'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->BookSubject->save($this->request->data)) {
				$this->Flash->success(__('The book subject has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The book subject could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('BookSubject.' . $this->BookSubject->primaryKey => $id));
			$this->request->data = $this->BookSubject->find('first', $options);
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
		$this->BookSubject->id = $id;
		if (!$this->BookSubject->exists()) {
			throw new NotFoundException(__('Invalid book subject'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->BookSubject->delete()) {
			$this->Flash->success(__('The book subject has been deleted.'));
		} else {
			$this->Flash->error(__('The book subject could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
