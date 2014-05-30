<?php
/* Audience Fixture generated on: 2010-11-08 16:11:52 : 1289243872 */
class AudienceFixture extends CakeTestFixture {
	var $name = 'Audience';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'place' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'charset' => 'utf8'),
		'date' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'audience_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'process_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'place' => 'Lorem ipsum dolor sit amet',
			'date' => '2010-11-08 16:17:52',
			'audience_type_id' => 1,
			'process_id' => 1
		),
	);
}
?>