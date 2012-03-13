<?php
/* Position Test cases generated on: 2012-02-14 15:02:46 : 1329242446*/
App::import('Model', 'Position');

class PositionTestCase extends CakeTestCase {
	var $fixtures = array('app.position', 'app.user', 'app.section', 'app.default_value', 'app.kind', 'app.equipment', 'app.count', 'app.equipment_type', 'app.owner', 'app.measure', 'app.patrimony', 'app.patrimony_status', 'app.organization', 'app.group', 'app.users_group');

	function startTest() {
		$this->Position =& ClassRegistry::init('Position');
	}

	function endTest() {
		unset($this->Position);
		ClassRegistry::flush();
	}

}
?>