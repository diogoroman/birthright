<?php
/* PatrimonyStatuses Test cases generated on: 2011-11-01 22:11:13 : 1320195793*/
App::import('Controller', 'PatrimonyStatuses');

class TestPatrimonyStatusesController extends PatrimonyStatusesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PatrimonyStatusesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.patrimony_status', 'app.patrimony', 'app.equipment', 'app.kind', 'app.count', 'app.owner', 'app.measure', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->PatrimonyStatuses =& new TestPatrimonyStatusesController();
		$this->PatrimonyStatuses->constructClasses();
	}

	function endTest() {
		unset($this->PatrimonyStatuses);
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