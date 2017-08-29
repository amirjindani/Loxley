<?php
/**
 * Review Fixture
 */
class ReviewFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'book_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'description' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'notes' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2048, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'review_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'rating' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => '10,0', 'unsigned' => false),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'flag_field' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
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
			'book_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'date' => '2017-08-25 01:36:37',
			'notes' => 'Lorem ipsum dolor sit amet',
			'review_type_id' => 1,
			'rating' => '',
			'active' => 1,
			'user_id' => 1,
			'flag_field' => 1,
			'created' => '2017-08-25 01:36:37',
			'modified' => '2017-08-25 01:36:37'
		),
	);

}
