<?php
class DATABASE_CONFIG {
	
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'patrimonio',
		'password' => 'BD$birthright#gia',
		'database' => 'birthright',
		'encoding' => 'utf8',
	);
	
		var $test = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'user',
		'password' => 'password',
		'database' => 'test_database_name',
	);
}
?>
