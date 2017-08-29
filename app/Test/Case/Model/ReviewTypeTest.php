<?php
App::uses('ReviewType', 'Model');

/**
 * ReviewType Test Case
 */
class ReviewTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.review_type',
		'app.review'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ReviewType = ClassRegistry::init('ReviewType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ReviewType);

		parent::tearDown();
	}

}
