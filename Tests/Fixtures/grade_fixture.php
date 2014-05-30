<?php
/* Grade Fixture generated on: 2010-11-08 18:11:49 : 1289251129 */
class GradeFixture extends CakeTestFixture {
	var $name = 'Grade';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'grade' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'description' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'grade' => 1,
			'description' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>