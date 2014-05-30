<?php
/* BillCategory Test cases generated on: 2011-01-27 16:01:43 : 1296155983*/
App::import('Model', 'BillCategory');

class BillCategoryTestCase extends CakeTestCase {
	var $fixtures = array('app.bill_category', 'app.bill');

	function startTest() {
		$this->BillCategory =& ClassRegistry::init('BillCategory');
	}

	function endTest() {
		unset($this->BillCategory);
		ClassRegistry::flush();
	}

}
?>