<?php
/* Kind Test cases generated on: 2011-11-03 21:11:24 : 1320368124*/
App::import('Model', 'Kind');

class KindTestCase extends CakeTestCase {
	var $fixtures = array('app.kind', 'app.default_value', 'app.count', 'app.equipment', 'app.equipment_type', 'app.owner', 'app.measure', 'app.patrimony', 'app.patrimony_status', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Kind =& ClassRegistry::init('Kind');
	}

	function endTest() {
		unset($this->Kind);
		ClassRegistry::flush();
	}

}
?>