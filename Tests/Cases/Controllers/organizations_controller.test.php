<?php
/* Organizations Test cases generated on: 2011-09-30 07:09:40 : 1317382120*/
App::import('Controller', 'Organizations');

class TestOrganizationsController extends OrganizationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OrganizationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.organization', 'app.equipment', 'app.kind', 'app.count', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Organizations =& new TestOrganizationsController();
		$this->Organizations->constructClasses();
	}

	function endTest() {
		unset($this->Organizations);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>