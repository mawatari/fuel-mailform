<?php
/**
 * The development database settings.
 */

return array(
	'default' => array(
		'type'           => 'mysqli',
		'connection'     => array(
			'hostname'       => 'localhost',
			'port'           => '3306',
			'database'       => 'fuel_mailform_dev',
			'username'       => 'root',
			'password'       => 'root',
			'persistent'     => false,
	    ),
		// 'connection'  => array(
		// 	'dsn'        => 'mysql:host=localhost;dbname=fuel_mailform_dev;charset=utf8mb4',
		// 	'username'   => 'root',
		// 	'password'   => 'root',
		// ),
	),
);
