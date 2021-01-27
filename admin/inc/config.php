<?php
// // Error Reporting Turn On
// ini_set('error_reporting', E_ALL);

// // Setting up the time zone
// date_default_timezone_set('Asia/Dhaka');

// // Host Name
// $dbhost = 'localhost';

// // Database Name
// $dbname = 'xicia_ecommerce';

// // Database Username
// $dbuser = 'root';

// // Database Password
// $dbpass = '';

// Error Reporting Turn On
ini_set('error_reporting', E_ALL);

// Setting up the time zone
date_default_timezone_set('Asia/Dhaka');

// Host Name
$dbhost = 'remotemysql.com';

// Database Name
$dbname = 'cgItiBnmOy';

// Database Username
$dbuser = 'cgItiBnmOy';

// Database Password
$dbpass = 'TRha1WbKKg';

// Defining base url
define("BASE_URL", "https://cmsldt.herokuapp.com/");

// Getting Admin url
define("ADMIN_URL", BASE_URL . "admin" . "/");

try {
	$pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $exception ) {
	echo "Connection error :" . $exception->getMessage();
}