<?php
/* Equipment Test cases generated on: 2011-11-01 22:11:52 : 1320197572*/
App::import('Controller', 'Equipment');

class TestEquipmentController extends EquipmentController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EquipmentControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.equipment', 'app.kind', 'app.count', 'app.equipment_type', 'app.owner', 'app.measure', 'app.patrimony', 'app.patrimony_status', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Equipment =& new TestEquipmentController();
		$this->Equipment->constructClasses();
	}

	function endTest() {
		unset($this->Equipment);
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