<?php
/* Group Test cases generated on: 2011-09-29 17:09:51 : 1317331131*/
App::import('Model', 'Group');

class GroupTestCase extends CakeTestCase {
	var $fixtures = array('app.group', 'app.user', 'app.users_group');

	function startTest() {
		$this->Group =& ClassRegistry::init('Group');
	}

	function endTest() {
		unset($this->Group);
		ClassRegistry::flush();
	}

	function testGetAll() {

	}

}
?>