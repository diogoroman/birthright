<?php
/* Bill Fixture generated on: 2011-01-26 23:01:02 : 1296096122 */
class BillFixture extends CakeTestFixture {
	var $name = 'Bill';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'identification' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'value' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,2'),
		'description' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 250, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'expiry' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'payment' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'bill_category_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'issuer' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'debit' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'identification' => 'Lorem ipsum dolor sit amet',
			'value' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'expiry' => '2011-01-26',
			'payment' => '2011-01-26',
			'bill_category_id' => 1,
			'issuer' => 'Lorem ipsum dolor sit amet',
			'debit' => 1,
			'created' => '2011-01-26 23:42:02',
			'modified' => '2011-01-26 23:42:02'
		),
	);
}
?>