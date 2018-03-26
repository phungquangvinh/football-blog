<?php
	include '../../config.php';
	session_start();
	if(empty($_SESSION['ten']) || empty($_SESSION['pass'])){
	    header("Location: ../");
	 } else if($_SESSION['ten']!='admin'){
	    header("Location: error.php");
	}

	$id = $_SESSION['id_user'];
	if($_GET['q'] == "No"){
		header("Location: acc.php");
	} elseif ($_GET['q'] == "Yes") {
		$del = mysqli_query($connect, "DELETE FROM user WHERE id='$id'");
		if(!$del){
			echo "Không xóa được!";
		} else {
			echo "Xóa thành công!";?><br /><br />
			<p>Trở về trang <a href="acc.php">quản lý</a> thành viên!</p>
			<?php
		}
	}

	$id_bai_viet = $_SESSION['id_bai_viet'];
	if($_GET['del'] == "No"){
		header("Location: index.php");
	} elseif ($_GET['del'] == "Yes") {
		$delete = mysqli_query($connect, "DELETE FROM bai_viet WHERE id='$id_bai_viet'");
		if(!$delete){
			echo "Không xóa được!";
		} else {
			echo "Xóa thành công!";?><br /><br />
			<p>Trở về trang <a href="index.php">quản trị</a>!</p>
			<?php
		}
	}
?>