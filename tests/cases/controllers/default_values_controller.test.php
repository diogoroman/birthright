<?php
/* DefaultValues Test cases generated on: 2011-11-03 21:11:27 : 1320367947*/
App::import('Controller', 'DefaultValues');

class TestDefaultValuesController extends DefaultValuesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DefaultValuesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.default_value', 'app.kind', 'app.equipment', 'app.count', 'app.equipment_type', 'app.owner', 'app.measure', 'app.patrimony', 'app.patrimony_status', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->DefaultValues =& new TestDefaultValuesController();
		$this->DefaultValues->constructClasses();
	}

	function endTest() {
		unset($this->DefaultValues);
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