<?php
/* Owner Test cases generated on: 2011-11-03 21:11:13 : 1320368173*/
App::import('Model', 'Owner');

class OwnerTestCase extends CakeTestCase {
	var $fixtures = array('app.owner', 'app.equipment', 'app.kind', 'app.default_value', 'app.count', 'app.measure', 'app.equipment_type', 'app.patrimony_status', 'app.patrimony', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Owner =& ClassRegistry::init('Owner');
	}

	function endTest() {
		unset($this->Owner);
		ClassRegistry::flush();
	}

}
?>