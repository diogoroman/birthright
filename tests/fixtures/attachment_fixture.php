<?php
/* Attachment Fixture generated on: 2010-11-19 17:11:16 : 1290197056 */
class AttachmentFixture extends CakeTestFixture {
	var $name = 'Attachment';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'filename' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'path' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'abstract' => array('type' => 'text', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'process_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'uploader_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'size' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'mime' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'process' => array('column' => 'process_id', 'unique' => 0), 'uploader' => array('column' => 'uploader_id', 'unique' => 0), 'abstract' => array('column' => array('abstract', 'title'), 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'filename' => 'Lorem ipsum dolor sit amet',
			'path' => 'Lorem ipsum dolor sit amet',
			'abstract' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'process_id' => 1,
			'uploader_id' => 1,
			'size' => 1,
			'mime' => 'Lorem ipsum dolor sit amet',
			'created' => '2010-11-19 17:04:16',
			'modified' => '2010-11-19 17:04:16'
		),
	);
}
?>