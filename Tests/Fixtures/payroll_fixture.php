<?php
/* Payroll Fixture generated on: 2011-01-18 10:01:04 : 1295359024 */
class PayrollFixture extends CakeTestFixture {
	var $name = 'Payroll';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'period' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'description' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'period' => '2011-01-18',
			'description' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-01-18 10:57:04',
			'modified' => '2011-01-18 10:57:04'
		),
	);
}
?>