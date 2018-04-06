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
?>

<!DOCTYPE html>
<html>
<head>
	<title>Chỉnh sửa thông tin cá nhân</title>
	<style> .error {color: #FF0000;}</style>
</head>
<body>
	<h2>Chỉnh sửa thông tin người dùng!</h2>
	<p><span class="error">Dấu * là trường bắt buộc.</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    Tên người dùng: <input type="text" name="user"/>
	    <span class="error">* <?php ?></span>
	    <br><br>
	    Email: <input type="email" name="email"/>
	    <span class="error">* <?php ?></span>
	    <br><br>
	    Mật khẩu cũ: <input type="password" name="matkhau"/>
	    <span class="error">* <?php ?></span>
	    <br><br>
	    Mật khẩu mới: <input type="password" name="matkhau"/>
	    <span class="error">* <?php ?></span>
	    <br><br>
	    Xác nhận mật khẩu mới: <input type="password" name="matkhau1"/>
	    <span class="error">* <?php ?></span>
	    <br><br>
	    <input type="submit" name="submit" value="Gửi"/><br />
	    <br /><a href="../">Trở về trang chủ</a>
	</form>
</body>
</html>