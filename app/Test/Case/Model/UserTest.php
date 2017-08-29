<?php
App::uses('User', 'Model');

/**
 * User Test Case
 */
class UserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user',
		'app.role',
		'app.role_privlege',
		'app.privilege',
		'app.school',
		'app.publisher',
		'app.book',
		'app.book_type',
		'app.book_subject',
		'app.review',
		'app.review_type',
		'app.comment',
		'app.replied'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->User = ClassRegistry::init('User');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->User);

		parent::tearDown();
	}

}
