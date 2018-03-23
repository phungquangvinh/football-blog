<?php

/**
 * @author GallerySoft.info
 * @copyright 2017
 */
 session_start();
 
include ('config.php');

$sql = "SELECT * FROM bai_viet";
$ket_qua = mysqli_query($connect, $sql);


$result = mysqli_query($connect, "SELECT * FROM giai_dau");

$result2 = mysqli_query($connect, "SELECT * FROM giai_dau");

?>