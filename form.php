<?php

/**
 * @author GallerySoft.info
 * @copyright 2017
 */
 session_start();
 define("HOME", "http://localhost/football-blog");
include ('config.php');

$sql = "SELECT * FROM bai_viet";
$ket_qua = mysqli_query($connect, $sql);
if(isset($_POST['submit'])){
    header("Location: ".HOME."/page/dangki.php");
}
$abc = "SELECT * FROM giai_dau";
$result = mysqli_query($connect, $abc);
$dm = "SELECT * FROM giai_dau";
$dkm = mysqli_query($connect, $dm);

?>