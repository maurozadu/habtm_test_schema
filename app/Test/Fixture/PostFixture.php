<?php
/**
 * PostFixture
 *
 */
class PostFixture extends CakeTestFixture {

	public $import = array('model' => 'Post');
/**
 * Fields
 *
 * @var array
 */
/*	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);
*/
/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'title' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'title' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'title' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'title' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'title' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 7,
			'title' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 8,
			'title' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 9,
			'title' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 10,
			'title' => 'Lorem ipsum dolor sit amet'
		),
	);
}
