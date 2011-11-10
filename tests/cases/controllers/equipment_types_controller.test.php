<?php
/* EquipmentTypes Test cases generated on: 2011-11-01 22:11:41 : 1320195761*/
App::import('Controller', 'EquipmentTypes');

class TestEquipmentTypesController extends EquipmentTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EquipmentTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.equipment_type', 'app.equipment', 'app.kind', 'app.count', 'app.owner', 'app.measure', 'app.patrimony', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->EquipmentTypes =& new TestEquipmentTypesController();
		$this->EquipmentTypes->constructClasses();
	}

	function endTest() {
		unset($this->EquipmentTypes);
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