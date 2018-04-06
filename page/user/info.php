<?php

/**
 * @author pqvinh
 * @copyright 2017
 */

include '../../form.php';

 if(empty($_SESSION['ten'])){
    header("Location: ../");
 } else if($_SESSION['ten']=='admin'){
    header("Location: ../admin/error.php");
 }

$user = $_SESSION['ten'];
$id = mysqli_query($connect, "SELECT * FROM user where username='$user'");

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Info</title>
 </head>
 <body>
	<h1>Thông tin người dùng</h1>
	<?php
		while ($row = mysqli_fetch_array($id)){
			?><p>ID người dùng: <b><?php echo $row['id']; ?></b></p>
			<p>Tên tài khoản: <b><?php echo $row['username']; ?></b></p>
			<p>Email đăng kí: <b><?php echo $row['email']; ?></b></p>
			<p>Mật khẩu: <b><?php echo $row['password']; ?></b></p>
			<p>Ngày tham gia: <b><?php echo $row['create_at']; ?></b></p><?php
		}
	?>
	<a href="index.php">Về trang blog</a><br />
	<a href="update.php">Chỉnh sửa thông tin cá nhân</a>
 </body>
 </html>