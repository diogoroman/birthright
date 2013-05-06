<?php
class DATABASE_CONFIG {
	
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'patrimonio',
		'password' => 'BD$patrimonio#gia',
		'database' => 'birthright',
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