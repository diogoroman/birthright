<?php
/* Chalk Fixture generated on: 2011-01-10 15:01:37 : 1294685437 */
class ChalkFixture extends CakeTestFixture {
	var $name = 'Chalk';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'value' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'value' => 1,
			'date' => '2011-01-10',
			'employee_id' => 1
		),
	);
}
?>