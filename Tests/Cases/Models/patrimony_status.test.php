<?php
/* PatrimonyStatus Test cases generated on: 2011-11-03 21:11:01 : 1320368221*/
App::import('Model', 'PatrimonyStatus');

class PatrimonyStatusTestCase extends CakeTestCase {
	var $fixtures = array('app.patrimony_status', 'app.patrimony', 'app.equipment', 'app.kind', 'app.default_value', 'app.count', 'app.measure', 'app.owner', 'app.equipment_type', 'app.section', 'app.organization', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->PatrimonyStatus =& ClassRegistry::init('PatrimonyStatus');
	}

	function endTest() {
		unset($this->PatrimonyStatus);
		ClassRegistry::flush();
	}

}
?>