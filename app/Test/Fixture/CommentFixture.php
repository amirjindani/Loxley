<?php
/**
 * Comment Fixture
 */
class CommentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'review_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comment' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 2048, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'title' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'flagged' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'date' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'replied' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'replied_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
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
			'review_id' => 1,
			'comment' => 'Lorem ipsum dolor sit amet',
			'title' => 'Lorem ipsum dolor sit amet',
			'user_id' => 1,
			'flagged' => 1,
			'date' => '2017-08-25 01:36:02',
			'replied' => 1,
			'replied_id' => 1,
			'created' => '2017-08-25 01:36:02',
			'modified' => '2017-08-25 01:36:02'
		),
	);

}
