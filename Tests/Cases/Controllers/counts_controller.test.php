<?php
/* Counts Test cases generated on: 2011-09-30 07:09:18 : 1317381978*/
App::import('Controller', 'Counts');

class TestCountsController extends CountsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CountsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.count', 'app.equipment', 'app.kind', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Counts =& new TestCountsController();
		$this->Counts->constructClasses();
	}

	function endTest() {
		unset($this->Counts);
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