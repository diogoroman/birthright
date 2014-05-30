<?php
/* DocGenerators Test cases generated on: 2011-01-19 16:01:48 : 1295466348*/
App::import('Controller', 'DocGenerators.DocGenerators');

class TestDocGeneratorsController extends DocGeneratorsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DocGeneratorsControllerTestCase extends CakeTestCase {
	function startTest() {
		$this->DocGenerators =& new TestDocGeneratorsController();
		$this->DocGenerators->constructClasses();
	}

	function endTest() {
		unset($this->DocGenerators);
		ClassRegistry::flush();
	}

}
?>