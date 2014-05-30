<?php
/* Process Fixture generated on: 2010-11-08 16:11:52 : 1289244172 */
class ProcessFixture extends CakeTestFixture {
	var $name = 'Process';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'process_number' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'action' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'skill_date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'skill_place' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'lawyer_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'customer_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'county_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'process_status_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'grade_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'action_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'civil_court_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'process_number' => 'Lorem ipsum dolor sit a',
			'action' => 'Lorem ipsum dolor sit amet',
			'skill_date' => '2010-11-08 16:22:52',
			'skill_place' => 'Lorem ipsum dolor sit amet',
			'lawyer_id' => 1,
			'customer_id' => 1,
			'county_id' => 1,
			'process_status_id' => 1,
			'grade_id' => 1,
			'action_type_id' => 1,
			'civil_court_id' => 1
		),
	);
}
?>