<?php
class M4d2b78f78c504897b5f63a527f000002 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = 'Adição de dados sobre férias para os funcionários';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
			'create_field' => array(
				'employees' => array(
					'vacation' => array('type' => 'string', 'length' => 5, 'null' => true, 'default' => '', 'after' => 'vehicle_type_id'),
					'vacation_duration' => array('type' => 'integer', 'null' => true, 'default' => 0, 'after' => 'vacation')
				),
			),
		),
		'down' => array(
			'drop_field' => array(
				'employees' => array(
					'vacation',
					'vacation_duration'
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
		return true;
	}
}
?>