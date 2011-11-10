<?php
/* Measures Test cases generated on: 2011-10-26 18:10:29 : 1319666129*/
App::import('Controller', 'Measures');

class TestMeasuresController extends MeasuresController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MeasuresControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.measure', 'app.equipment', 'app.kind', 'app.count', 'app.owner', 'app.patrimony', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Measures =& new TestMeasuresController();
		$this->Measures->constructClasses();
	}

	function endTest() {
		unset($this->Measures);
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