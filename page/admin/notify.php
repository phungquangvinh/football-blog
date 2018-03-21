<?php
include '../../config.php';
session_start();
if(empty($_SESSION['ten']) || empty($_SESSION['pass'])){
    header("Location: ../");
 } else if($_SESSION['ten']!='admin'){
    header("Location: error.php");
}


$id = $_SESSION['id_user'] = $_GET["id"];
$sql = "SELECT * FROM user where id='$id'";
$ket_qua = mysqli_query($connect, $sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Thông báo</title>
</head>
<body>
	<b>Thông báo:</b>
	<p>Bạn có chắc muốn xóa nick 
		'<?php while ($row = mysqli_fetch_array($ket_qua))
		{echo $row["username"]; }?>' ra khỏi cộng đồng của chúng ta? Hãy cân nhắc!</p>
	<form action="delete.php">
		<input type="submit" name="q" value="Yes">&emsp;&emsp;
		<input type="submit" name="q" value="No">
	</form>
</body>
</html>