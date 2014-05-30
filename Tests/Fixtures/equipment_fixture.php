<?php
/* Equipment Fixture generated on: 2011-11-01 22:11:44 : 1320196004 */
class EquipmentFixture extends CakeTestFixture {
	var $name = 'Equipment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'fcg' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'description' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'alias' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'kind_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'count_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'equipment_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'owner_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'quantity' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'measure_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 5, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'price' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '10,2'),
		'sendRegister' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'includeRegister' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'fcg' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'alias' => 'Lorem ipsum dolor sit amet',
			'kind_id' => 1,
			'count_id' => 1,
			'equipment_type_id' => 1,
			'owner_id' => 1,
			'quantity' => 1,
			'measure_id' => 'Lor',
			'price' => 1,
			'sendRegister' => '2011-11-01 22:06:44',
			'includeRegister' => '2011-11-01 22:06:44',
			'created' => '2011-11-01 22:06:44',
			'modified' => '2011-11-01 22:06:44'
		),
	);
}
?>