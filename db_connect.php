<?php

$db_host = 'localhost';
$db_username = 'mysql';
$db_password = 'mysql';
$db_name = 'parsing';
$db_charset = 'utf8';
$options = [
	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
$dsn = "mysql:host=".$db_host.";port=3306;dbname=".$db_name.";charset=".$db_charset."";
$pdo = new PDO($dsn, $db_username, $db_password, $options);