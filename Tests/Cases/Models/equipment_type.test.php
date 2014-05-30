<?php
/* EquipmentType Test cases generated on: 2011-11-03 21:11:32 : 1320368072*/
App::import('Model', 'EquipmentType');

class EquipmentTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.equipment_type', 'app.equipment', 'app.kind', 'app.count', 'app.owner', 'app.measure', 'app.patrimony', 'app.patrimony_status', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->EquipmentType =& ClassRegistry::init('EquipmentType');
	}

	function endTest() {
		unset($this->EquipmentType);
		ClassRegistry::flush();
	}

}
?>