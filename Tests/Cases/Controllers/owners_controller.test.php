<?php
/* Owners Test cases generated on: 2011-10-26 18:10:51 : 1319666151*/
App::import('Controller', 'Owners');

class TestOwnersController extends OwnersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OwnersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.owner', 'app.equipment', 'app.kind', 'app.count', 'app.measure', 'app.patrimony', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Owners =& new TestOwnersController();
		$this->Owners->constructClasses();
	}

	function endTest() {
		unset($this->Owners);
		ClassRegistry::flush();
	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>