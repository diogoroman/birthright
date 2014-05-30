<?php
/* ProcessStatus Fixture generated on: 2010-11-08 17:11:32 : 1289249552 */
class ProcessStatusFixture extends CakeTestFixture {
	var $name = 'ProcessStatus';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'status' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 25, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'status' => 'Lorem ipsum dolor sit a'
		),
	);
}
?>