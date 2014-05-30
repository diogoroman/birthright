<?php
/* Section Test cases generated on: 2011-11-03 21:11:23 : 1320368243*/
App::import('Model', 'Section');

class SectionTestCase extends CakeTestCase {
	var $fixtures = array('app.section', 'app.patrimony', 'app.equipment', 'app.kind', 'app.default_value', 'app.count', 'app.measure', 'app.owner', 'app.equipment_type', 'app.patrimony_status', 'app.organization', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Section =& ClassRegistry::init('Section');
	}

	function endTest() {
		unset($this->Section);
		ClassRegistry::flush();
	}

}
?>