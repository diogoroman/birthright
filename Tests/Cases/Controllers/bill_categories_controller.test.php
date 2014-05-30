<?php
/* BillCategories Test cases generated on: 2011-01-27 16:01:53 : 1296156053*/
App::import('Controller', 'BillCategories');

class TestBillCategoriesController extends BillCategoriesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BillCategoriesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.bill_category', 'app.bill');

	function startTest() {
		$this->BillCategories =& new TestBillCategoriesController();
		$this->BillCategories->constructClasses();
	}

	function endTest() {
		unset($this->BillCategories);
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