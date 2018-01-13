<?php

/**
 * @author pqvinh
 * @copyright 2017
 */

$username = "vinh"; // Khai báo username
$password = "";      // Khai báo password
$server   = "localhost";   // Khai báo server
$dbname   = "football";      // Khai báo database
$connect = mysqli_connect($server, $username, $password, $dbname);
if (!$connect) {
	die("Không kết nối :" . mysqli_connect_error());
	exit();
}

?>