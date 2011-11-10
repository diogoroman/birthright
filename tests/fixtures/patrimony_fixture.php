<?php
/* Patrimony Fixture generated on: 2011-11-01 22:11:27 : 1320196107 */
class PatrimonyFixture extends CakeTestFixture {
	var $name = 'Patrimony';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'orderNum' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'cod' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 39, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'equipment_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'patrimony_status_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'priceUnit' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'organization_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'section_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'room' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'discrepancy' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'conference' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'intervalConf' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'orderNum' => 1,
			'cod' => 'Lorem ipsum dolor sit amet',
			'equipment_id' => 1,
			'patrimony_status_id' => 1,
			'priceUnit' => 1,
			'organization_id' => 1,
			'section_id' => 1,
			'room' => 'Lorem ipsum dolor ',
			'user_id' => 1,
			'discrepancy' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'conference' => '2011-11-01 22:08:27',
			'intervalConf' => 1,
			'created' => '2011-11-01 22:08:27',
			'modified' => '2011-11-01 22:08:27'
		),
	);
}
?>