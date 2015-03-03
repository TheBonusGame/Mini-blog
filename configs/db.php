<?php

define('USERNAME', 'root');
define('PASSWORD', 'root');
define('DSN', 'mysql:dbname=blog;host=localhost');

$options = [
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];
