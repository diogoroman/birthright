<?php
/* DefaultValue Test cases generated on: 2011-11-03 21:11:00 : 1320367920*/
App::import('Model', 'DefaultValue');

class DefaultValueTestCase extends CakeTestCase {
	var $fixtures = array('app.default_value', 'app.kind', 'app.equipment', 'app.count', 'app.equipment_type', 'app.owner', 'app.measure', 'app.patrimony', 'app.patrimony_status', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->DefaultValue =& ClassRegistry::init('DefaultValue');
	}

	function endTest() {
		unset($this->DefaultValue);
		ClassRegistry::flush();
	}

}
?>