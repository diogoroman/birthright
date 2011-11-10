<?php
/* Bill Test cases generated on: 2011-01-26 23:01:12 : 1296096132*/
App::import('Model', 'Bill');

class BillTestCase extends CakeTestCase {
	var $fixtures = array('app.bill', 'app.bill_category');

	function startTest() {
		$this->Bill =& ClassRegistry::init('Bill');
	}

	function endTest() {
		unset($this->Bill);
		ClassRegistry::flush();
	}

}
?>