<?php
/* Patrimony Test cases generated on: 2011-11-01 22:11:35 : 1320196115*/
App::import('Model', 'Patrimony');

class PatrimonyTestCase extends CakeTestCase {
	var $fixtures = array('app.patrimony', 'app.equipment', 'app.kind', 'app.count', 'app.owner', 'app.measure', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Patrimony =& ClassRegistry::init('Patrimony');
	}

	function endTest() {
		unset($this->Patrimony);
		ClassRegistry::flush();
	}

}
?>