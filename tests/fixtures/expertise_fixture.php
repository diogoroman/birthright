<?php
/* Expertise Fixture generated on: 2010-11-25 16:11:48 : 1290714408 */
class ExpertiseFixture extends CakeTestFixture {
	var $name = 'Expertise';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'expert_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'expert_address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'expert_phone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 160, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'expertise_date' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'expertise_place' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 160, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'process_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'expert_name' => 'Lorem ipsum dolor sit amet',
			'expert_address' => 'Lorem ipsum dolor sit amet',
			'expert_phone' => 'Lorem ipsum dolor sit amet',
			'expertise_date' => '2010-11-25',
			'expertise_place' => 'Lorem ipsum dolor sit amet',
			'process_id' => 1
		),
	);
}
?>