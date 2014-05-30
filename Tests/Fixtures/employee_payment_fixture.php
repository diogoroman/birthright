<?php
/* EmployeePayment Fixture generated on: 2011-01-17 17:01:23 : 1295294483 */
class EmployeePaymentFixture extends CakeTestFixture {
	var $name = 'EmployeePayment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'discounts' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'payment_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'liquid_value' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'vacation' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'employee_id' => 1,
			'discounts' => 1,
			'payment_date' => '2011-01-17',
			'liquid_value' => 1,
			'vacation' => 'Lorem ipsum dolor sit amet',
			'created' => '2011-01-17 17:01:23',
			'modified' => '2011-01-17 17:01:23'
		),
	);
}
?>