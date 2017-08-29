<?php
App::uses('RolePrivlege', 'Model');

/**
 * RolePrivlege Test Case
 */
class RolePrivlegeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.role_privlege',
		'app.role',
		'app.privilege'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RolePrivlege = ClassRegistry::init('RolePrivlege');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RolePrivlege);

		parent::tearDown();
	}

}
