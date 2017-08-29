<?php
App::uses('Privilege', 'Model');

/**
 * Privilege Test Case
 */
class PrivilegeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.privilege',
		'app.role_privlege'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Privilege = ClassRegistry::init('Privilege');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Privilege);

		parent::tearDown();
	}

}
