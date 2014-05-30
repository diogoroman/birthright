<?php
/* DefaultValue Fixture generated on: 2011-11-03 21:11:00 : 1320367920 */
class DefaultValueFixture extends CakeTestFixture {
	var $name = 'DefaultValue';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'kind_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'count_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'measure_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'owner_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'equipment_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'patrimony_status_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'unique'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'kind_id_UNIQUE' => array('column' => 'kind_id', 'unique' => 1), 'count_id_UNIQUE' => array('column' => 'count_id', 'unique' => 1), 'measure_id_UNIQUE' => array('column' => 'measure_id', 'unique' => 1), 'owner_id_UNIQUE' => array('column' => 'owner_id', 'unique' => 1), 'equipment_type_id_UNIQUE' => array('column' => 'equipment_type_id', 'unique' => 1), 'patrimony_status_id_UNIQUE' => array('column' => 'patrimony_status_id', 'unique' => 1), 'section_id_UNIQUE' => array('column' => 'section_id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'kind_id' => 1,
			'count_id' => 1,
			'measure_id' => 1,
			'owner_id' => 1,
			'equipment_type_id' => 1,
			'patrimony_status_id' => 1,
			'section_id' => 1
		),
	);
}
?>