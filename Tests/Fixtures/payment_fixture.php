<?php
/* Payment Fixture generated on: 2011-01-13 15:01:02 : 1294943342 */
class PaymentFixture extends CakeTestFixture {
	var $name = 'Payment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'receipt_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'comment' => 'pagamento inicial'),
		'value' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,2'),
		'date' => array('type' => 'date', 'null' => false, 'default' => NULL, 'comment' => 'data prevista'),
		'paid' => array('type' => 'date', 'null' => true, 'default' => NULL, 'comment' => 'data efetiva de pagamento'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'RECEIPT' => array('column' => 'receipt_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'receipt_id' => 1,
			'parent_id' => 1,
			'value' => 1,
			'date' => '2011-01-13',
			'paid' => '2011-01-13',
			'created' => '2011-01-13 15:29:02',
			'modified' => '2011-01-13 15:29:02'
		),
	);
}
?>