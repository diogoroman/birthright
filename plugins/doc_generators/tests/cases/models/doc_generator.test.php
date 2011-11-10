<?php
/* DocGenerator Test cases generated on: 2011-01-19 16:01:23 : 1295466263*/
App::import('Model', 'DocGenerators.DocGenerator');

class DocGeneratorTestCase extends CakeTestCase {
	function startTest() {
		$this->DocGenerator =& ClassRegistry::init('DocGenerator');
	}

	function endTest() {
		unset($this->DocGenerator);
		ClassRegistry::flush();
	}

}
?>