<?php
App::uses('Review', 'Model');

/**
 * Review Test Case
 */
class ReviewTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.review',
		'app.book',
		'app.book_type',
		'app.book_subject',
		'app.user',
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
		$this->Review = ClassRegistry::init('Review');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Review);

		parent::tearDown();
	}

}
