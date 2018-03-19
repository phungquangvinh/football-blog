<?php
	$q = $_GET["q"];
	if($q == "No") {
		header("Location: acc.php");
	} elseif ($q == "Yes") {
		$del = mysqli_query($connect, $delete);
		if(!$del){
			echo "Lỗi!";
		} else {
			echo "Xóa thành công!";
			?><a href="acc.php">Trở về trang quản lý!</a><?php
		}
	}
?>