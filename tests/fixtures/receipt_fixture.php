<?php
/* Receipt Fixture generated on: 2011-01-13 14:01:18 : 1294939098 */
class ReceiptFixture extends CakeTestFixture {
	var $name = 'Receipt';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'number' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'Número do recibo'),
		'process_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'payment_form_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'number' => 1,
			'process_id' => 1,
			'customer_id' => 1,
			'payment_form_id' => 1,
			'created' => '2011-01-13 14:18:18',
			'modified' => '2011-01-13 14:18:18'
		),
	);
}
?>