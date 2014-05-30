<?php
/* Positions Test cases generated on: 2012-02-14 15:02:38 : 1329242918*/
App::import('Controller', 'Positions');

class TestPositionsController extends PositionsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PositionsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.position', 'app.user', 'app.section', 'app.default_value', 'app.kind', 'app.equipment', 'app.count', 'app.equipment_type', 'app.owner', 'app.measure', 'app.patrimony', 'app.patrimony_status', 'app.organization', 'app.group', 'app.users_group');

	function startTest() {
		$this->Positions =& new TestPositionsController();
		$this->Positions->constructClasses();
	}

	function endTest() {
		unset($this->Positions);
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