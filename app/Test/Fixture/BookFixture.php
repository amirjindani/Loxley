<?php
/**
 * Book Fixture
 */
class BookFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'book_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'book_name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'book_isbn' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 13, 'unsigned' => false),
		'book_subject_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'active' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
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
			'book_type_id' => 1,
			'book_name' => 'Lorem ipsum dolor sit amet',
			'book_isbn' => 1,
			'book_subject_id' => 1,
			'active' => 1,
			'user_id' => 1,
			'created' => '2017-08-25 01:35:54',
			'modified' => '2017-08-25 01:35:54'
		),
	);

}
