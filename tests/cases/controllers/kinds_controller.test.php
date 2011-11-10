<?php
/* Kinds Test cases generated on: 2011-09-30 07:09:12 : 1317382032*/
App::import('Controller', 'Kinds');

class TestKindsController extends KindsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class KindsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.kind', 'app.equipment', 'app.count', 'app.organization', 'app.section', 'app.user', 'app.group', 'app.users_group');

	function startTest() {
		$this->Kinds =& new TestKindsController();
		$this->Kinds->constructClasses();
	}

	function endTest() {
		unset($this->Kinds);
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