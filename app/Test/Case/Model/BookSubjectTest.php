<?php
App::uses('BookSubject', 'Model');

/**
 * BookSubject Test Case
 */
class BookSubjectTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.book_subject',
		'app.book'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BookSubject = ClassRegistry::init('BookSubject');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BookSubject);

		parent::tearDown();
	}

}
