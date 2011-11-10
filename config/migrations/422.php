<?php
class M4d2b3a0112a444fa861b1f677f000002 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = 'Ticket #422, relacionado a estacionamento';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_table' => array(
				'vehicle_types' => array(
					'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
					'title' => array('type' => 'string', 'null' => false, 'length' => 100, ),
					'created' => array('type' => 'datetime'),
					'modified' => array('type' => 'datetime'),
					'indexes' => array(
						'PRIMARY' => array('column' => 'id', 'unique' => 1),
					),
					'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB'),
				),
				
			),
			'create_field' => array(
				'employees' => array(
					'parking' => array('type' => 'boolean', 'null' => false, 'default' => 0, 'after' => 'user_id'),
					'parking_begin' => array('type' => 'date', 'null', true, 'default' => NULL, 'after' => 'parking'),
					'parking_end' => array('type' => 'date', 'null', true, 'default' => NULL, 'after' => 'parking_begin'),
					'vehicle_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'after' => 'parking_end'),
				),
			),
		),
		'down' => array(
			'drop_table' => array(
				'vehicle_types'
			),
			'drop_field' => array(
				'employees' => array(
					'parking',
					'vehicle_type_id'
				)
			)
		),
	);

/**
 * Before migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function before($direction) {
		return true;
	}

/**
 * After migration callback
 *
 * @param string $direction, up or down direction of migration process
 * @return boolean Should process continue
 * @access public
 */
	public function after($direction) {
		if($direction === 'up')
		{
			$vehicle_type = $this->generateModel('VehicleType');
			
			$vehicle_types = array(
				array('title' => 'Carro'),
				array('title' => 'Moto')
			);
			
			$vehicle_type->saveAll($vehicle_types);
		}
		
		return true;
	}
}
?>