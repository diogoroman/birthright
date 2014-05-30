<?php
App::import('Core', 'Security');

class M4d2b7a744aa44052bdfd3b647f000002 extends CakeMigration {

/**
 * Migration description
 *
 * @var string
 * @access public
 */
	public $description = '';

/**
 * Actions to be performed
 *
 * @var array $migration
 * @access public
 */
	public $migration = array(
		'up' => array(
		),
		'down' => array(
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
		
		$user = $this->generateModel('User');
		
		if($direction == 'up')
		{
			$admin = array(
				'User' => array(
					'name' => 'Administrador',
					'username' => 'admin',
					'password' => Security::hash('senha', null, true)
				),
				'Group' => array('group_id' => 1)
			);
			
			$user->save($admin, array('validate' => false));
		}
		
		return true;
	}
}
?>