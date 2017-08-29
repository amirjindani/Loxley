<?php
/**
 * User Fixture
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'school_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'student_major' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'student_graduation_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'publisher_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'publisher_rating' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,0', 'unsigned' => false),
		'professor_rating' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '10,0', 'unsigned' => false),
		'professor_tenured' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2048, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password_reset_token' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'password_reset_token_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'password' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'role_id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'school_id' => 1,
			'student_major' => 'Lorem ipsum dolor sit amet',
			'student_graduation_date' => '2017-08-25',
			'publisher_id' => 1,
			'publisher_rating' => '',
			'professor_rating' => '',
			'professor_tenured' => 1,
			'email' => 'Lorem ipsum dolor sit amet',
			'notes' => 'Lorem ipsum dolor sit amet',
			'password_reset_token' => 'Lorem ipsum dolor sit amet',
			'password_reset_token_date' => '2017-08-25',
			'created' => '2017-08-25 01:36:56',
			'modified' => '2017-08-25 01:36:56',
			'password' => 'Lorem ipsum dolor sit amet'
		),
	);

}
