<?php
/* Employee Fixture generated on: 2010-11-25 16:11:18 : 1290714258 */
class EmployeeFixture extends CakeTestFixture {
	var $name = 'Employee';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'admission_date' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'demission_date' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'office' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 80, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'salary' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'admission_date' => '2010-11-25',
			'demission_date' => '2010-11-25',
			'office' => 'Lorem ipsum dolor sit amet',
			'salary' => 1,
			'user_id' => 1
		),
	);
}
?>