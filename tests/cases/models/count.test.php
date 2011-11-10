<?php
/* Count Test cases generated on: 2011-09-29 17:09:15 : 1317331095*/
App::import('Model', 'Count');

class CountTestCase extends CakeTestCase {
	var $fixtures = array('app.count', 'app.equipment', 'app.kind', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Count =& ClassRegistry::init('Count');
	}

	function endTest() {
		unset($this->Count);
		ClassRegistry::flush();
	}

}
?>