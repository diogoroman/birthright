<?php
/* Measure Test cases generated on: 2011-11-03 21:11:49 : 1320368149*/
App::import('Model', 'Measure');

class MeasureTestCase extends CakeTestCase {
	var $fixtures = array('app.measure', 'app.equipment', 'app.kind', 'app.default_value', 'app.count', 'app.owner', 'app.equipment_type', 'app.patrimony_status', 'app.patrimony', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Measure =& ClassRegistry::init('Measure');
	}

	function endTest() {
		unset($this->Measure);
		ClassRegistry::flush();
	}

}
?>