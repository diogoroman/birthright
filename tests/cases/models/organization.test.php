<?php
/* Organization Test cases generated on: 2011-09-29 17:09:44 : 1317331184*/
App::import('Model', 'Organization');

class OrganizationTestCase extends CakeTestCase {
	var $fixtures = array('app.organization', 'app.equipment', 'app.kind', 'app.count', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Organization =& ClassRegistry::init('Organization');
	}

	function endTest() {
		unset($this->Organization);
		ClassRegistry::flush();
	}

}
?>