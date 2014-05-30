<?php
/* Bills Test cases generated on: 2011-01-27 16:01:37 : 1296156097*/
App::import('Controller', 'Bills');

class TestBillsController extends BillsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BillsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.bill', 'app.bill_category');

	function startTest() {
		$this->Bills =& new TestBillsController();
		$this->Bills->constructClasses();
	}

	function endTest() {
		unset($this->Bills);
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