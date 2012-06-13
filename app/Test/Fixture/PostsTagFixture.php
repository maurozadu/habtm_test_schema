<?php
/**
 * PostsTagFixture
 *
 */
class PostsTagFixture extends CakeTestFixture {


/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'post_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tag_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
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
			'post_id' => 1,
			'tag_id' => 1
		),
		array(
			'id' => 2,
			'post_id' => 2,
			'tag_id' => 2
		),
		array(
			'id' => 3,
			'post_id' => 3,
			'tag_id' => 3
		),
		array(
			'id' => 4,
			'post_id' => 4,
			'tag_id' => 4
		),
		array(
			'id' => 5,
			'post_id' => 5,
			'tag_id' => 5
		),
		array(
			'id' => 6,
			'post_id' => 6,
			'tag_id' => 6
		),
		array(
			'id' => 7,
			'post_id' => 7,
			'tag_id' => 7
		),
		array(
			'id' => 8,
			'post_id' => 8,
			'tag_id' => 8
		),
		array(
			'id' => 9,
			'post_id' => 9,
			'tag_id' => 9
		),
		array(
			'id' => 10,
			'post_id' => 10,
			'tag_id' => 10
		),
	);
}
