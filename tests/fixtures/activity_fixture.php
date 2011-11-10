<?php
/* Activity Fixture generated on: 2010-11-30 18:11:26 : 1291152506 */
class ActivityFixture extends CakeTestFixture {
	var $name = 'Activity';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'responsible' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 80, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => false, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'process_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'predicted_date' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'performed_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'responsible' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'process_id' => 1,
			'predicted_date' => '2010-11-30',
			'performed_date' => '2010-11-30'
		),
	);
}
?>