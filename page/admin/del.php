<?php
	include '../../config.php';
	session_start();
	if(empty($_SESSION['ten']) || empty($_SESSION['pass'])){
	    header("Location: ../");
	 } else if($_SESSION['ten']!='admin'){
	    header("Location: error.php");
	}
	$_SESSION['id_bai_viet'] = $_GET['id'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xóa bài viết</title>
</head>
<body>
	<p>Bạn có chắc chắn là muốn xóa bài viết này?</p>
	<form action="delete.php">
		<input type="submit" name="del" value="Yes">
		<input type="submit" name="del" value="No">
	</form>
</body>
</html>