<?php
/* Patrimonies Test cases generated on: 2011-10-26 18:10:19 : 1319666179*/
App::import('Controller', 'Patrimonies');

class TestPatrimoniesController extends PatrimoniesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PatrimoniesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.patrimony', 'app.equipment', 'app.kind', 'app.count', 'app.owner', 'app.measure', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Patrimonies =& new TestPatrimoniesController();
		$this->Patrimonies->constructClasses();
	}

	function endTest() {
		unset($this->Patrimonies);
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