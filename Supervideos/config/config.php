<?php 
	define ('CONF_DB_HOST', 'localhost');
	define ('CONF_DB_USER', 'root');
	define ('CONF_DB_PASS', '');
	define ('CONF_DB_DATABASE', 'supervideos');
	define ('CONF_DB_CHARSET', 'utf-8');
	define('DIR', $_SERVER['DOCUMENT_ROOT'].'/Supervideos/');

	define('NORMAL_CLASS', [
			'Conexion',
			'Login',
			'Session',
			'Users'
		]);
?>