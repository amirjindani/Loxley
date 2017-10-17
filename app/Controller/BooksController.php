<?php
App::uses('AppController', 'Controller');
/**
 * Books Controller
 *
 * @property Book $Book
 * @property PaginatorComponent $Paginator
 */
class BooksController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Search.Prg');
	
	public function beforeFilter() {
		parent::beforeFilter();
		// Allow users to register and logout.
		$this->Auth->allow('find_author', 'find_book', 'index','landing_page', 'view');
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Prg->commonProcess();
		$this->Paginator->settings['conditions'] = $this->Book->parseCriteria($this->Prg->parsedParams());
		$this->Book->recursive = 1;
		$this->loadModel('BookSubject');
		$this->loadModel('School');
		$this->loadModel('Publisher');
		$this->set('schoolOptions', $this->School->find('list', array('fields' => 'name')));
		$this->set('bookSubjectOptions', $this->BookSubject->find('list', array('fields' => 'name')));
		$this->set('publisherOptions', $this->Publisher->find('list', array('fields' => 'name')));
		$this->set('books', $this->Paginator->paginate());
		$bookAuthors = $this->Book->find('list', array('fields' => 'author'));
		$bookAuthorOptions = array_unique($bookAuthors);
		$this->set(compact('bookAuthorOptions'));
	}

	public function landing_page() {
		$this->Book->recursive = 0;
		$this->set('books', $this->Paginator->paginate());
	}
	
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
		$this->set('book', $this->Book->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//prevent any but admin users from accessing administrative pages
//		if($this->Auth->user('Role.name') != 'Administrator' || $this->Auth->user('Role.name') != 'Professor') {
//			$this->Flash->error('You are not authorized to visit that page');
//			$this->redirect('/');
//		}
		if ($this->request->is('post')) {
			$this->Book->create();
			if ($this->Book->save($this->request->data)) {
				$this->Flash->success(__('Book added successfully. Thank you for your contribution.'));
				return $this->redirect(array('controller' => 'reviews', 'action' => 'add', '?' => array('bookName' => $this->request->data['Book']['book_name'])));
			} else {
				$this->Flash->error(__('Book could not be saved. Please, try again.'));
			}
		}
		$bookTypes = $this->Book->BookType->find('list');
		$bookSubjects = $this->Book->BookSubject->find('list');
		$users = $this->Book->User->find('list');
		$this->set(compact('bookTypes', 'bookSubjects', 'users'));
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
		$this->BookSubject->recursive = 0;
		if (!$this->Book->exists($id)) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Book->save($this->request->data)) {
				$this->Flash->success(__('Book changes have been saved successfully.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('Book changes could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Book.' . $this->Book->primaryKey => $id));
			$this->request->data = $this->Book->find('first', $options);
		}
		$bookTypes = $this->Book->BookType->find('list');
		$bookSubjects = $this->Book->BookSubject->find('list');
		$users = $this->Book->User->find('list');
		$this->set(compact('bookTypes', 'bookSubjects', 'users'));
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
		$this->BookSubject->recursive = 0;
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Book->delete()) {
			$this->Flash->success(__('Book has been deleted.'));
		} else {
			$this->Flash->error(__('Book could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * find method
 *
 * method for searching by book title
 */
 
	public function find_book() {
		//load all books for dropdown menu on search function
		$this->set('bookOptions', $this->Book->find('list', array('fields' => 'book_name')));
	}

/**
 * find by author method
 *
 * method for searching by book author
 */
	
	public function find_author() {
		//load all books for dropdown menu on search function
		$this->Prg->commonProcess();
		$this->Paginator->settings['conditions'] = $this->Book->parseCriteria($this->Prg->parsedParams());
		$bookAuthors = $this->Book->find('list', array('fields' => 'author'));
		$bookAuthorOptions = array_unique($bookAuthors);
		$this->set(compact('bookAuthorOptions'));
	}
}
