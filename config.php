<?php

/**
 * @author pqvinh
 * @copyright 2017
 */

	$username = "root"; // Khai báo username 
	$password = "";      // Khai báo password
	$server   = "localhost";   // Khai báo server
	$dbname   = "football";      // Khai báo database

	// K?t n?i database tintuc
	$connect = mysqli_connect($server, $username, $password, $dbname);

	//N?u k?t n?i b? l?i thì xu?t báo l?i và thoát.
	if (!$connect) {
		die("Không kết nối :" . mysqli_connect_error());
		exit();
	}

?>