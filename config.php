<?php
	ini_set('display_errors',1);
	error_reporting(-1);
	define('DB_HOST', getenv('DB_ENDPOINT'));
    define('DB_USER', 'admin');
    define('DB_PASSWORD', 'passwordort');
    define('DB_DATABASE', 'db_web');
?>
