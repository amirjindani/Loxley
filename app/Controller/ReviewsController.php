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
		$review = $this->Review->find('first', $options);
		$this->loadModel('Role');
		$roles = $this->Role->find('all');
		$this->set(compact('authUser', 'roles', 'review'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Review->create();
			$totalEBookScore = 0;
			$totalPublishedScore = 0;
			$totalPublishedScore = $this->request->data['Review']['published_content_aligned'] + $this->request->data['Review']['published_price'] + $this->request->data['Review']['published_content_style'] + $this->request->data['Review']['published_included_tools'] + $this->request->data['Review']['published_practice_questions'] + $this->request->data['Review']['published_up_to_date'] + $this->request->data['Review']['published_provided_through_publisher'];
			$totalEBookScore = $this->request->data['Review']['ebook_functionality'] + $this->request->data['Review']['ebook_integration_with_lms'] + $this->request->data['Review']['ebook_support'] + $this->request->data['Review']['ebook_underline'] + $this->request->data['Review']['ebook_practice'] + $this->request->data['Review']['ebook_gradebook'] + $this->request->data['Review']['ebook_technical_problems'];
			if($totalPublishedScore != 0) {
				$averagePublishedScore = round($totalPublishedScore / 7);
				$this->request->data['Review']['published_average_rating'] = $averagePublishedScore;
			}
			if($totalEBookScore != 0) {
				$averageEbookScore = round($totalEBookScore / 7);
				$this->request->data['Review']['ebook_average_rating'] = $averageEbookScore;
			}
			if ($this->Review->save($this->request->data)) {
				$this->Flash->success(__('Your review has been submitted. Thank you for your contribution.'));
				return $this->redirect(array('controller' => 'pages', 'action' => 'home'));
			} else {
				$this->Flash->error(__('Your review could not be saved. Please, try again.'));
			}
		}
		if(isset($_GET['bookName'])) {
			$addedBook = $_GET['bookName'];
		}
		$today = date('Y-m-d');
		$this->Review->Book->recursive = 0;
		$books = $this->Review->Book->find('all');
		$options = array();
		foreach($books as $book){
			$options[] = array(
				'value'=>$book['Book']['id'],
				'name' => $book['Book']['book_name']
			);
		}
		$reviewTypes = $this->Review->ReviewType->find('list', array('fields' => 'name'));
		$users = $this->Review->User->find('list');
		$authUser = $this->Auth->user();
		$this->set(compact('books', 'reviewTypes', 'users', 'authUser', 'today', 'addedBook', 'options'));
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
				$this->Flash->success(__('Your review has been updated. Thank you for your contribution.'));
				return $this->redirect(array('controller' => 'users', 'action' => 'view', $this->params['pass'][0] => $this->request->data['Review']['user_id']));
			} else {
				$this->Flash->error(__('Your updates could not be saved. Please, try again.'));
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
			$this->Flash->success(__('Review has been deleted.'));
		} else {
			$this->Flash->error(__('Review could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('controller' => 'pages', 'action' => 'home'));
	}
}
