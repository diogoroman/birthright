<?php
/* Equipment Test cases generated on: 2011-11-01 22:11:47 : 1320196007*/
App::import('Model', 'Equipment');

class EquipmentTestCase extends CakeTestCase {
	var $fixtures = array('app.equipment', 'app.kind', 'app.count', 'app.owner', 'app.measure', 'app.patrimony', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Equipment =& ClassRegistry::init('Equipment');
	}

	function endTest() {
		unset($this->Equipment);
		ClassRegistry::flush();
	}

}
?>