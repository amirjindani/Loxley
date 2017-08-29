<?php
App::uses('BookType', 'Model');

/**
 * BookType Test Case
 */
class BookTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.book_type',
		'app.book'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->BookType = ClassRegistry::init('BookType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->BookType);

		parent::tearDown();
	}

}
