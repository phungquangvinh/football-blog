<?php

/**
 * @author pqvinh
 * @copyright 2017
 */
include('xulidangki.php');
session_start();
if(isset($_SESSION['ten'])){
    if($_SESSION['ten'] != 'admin'){
        header("Location: user");
    } else header("Location: admin");
}
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="author" content="pqvinh" />
    <title>Đăng kí tài khoản mới</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<style>
    .error {color: #FF0000;}
</style>
<body style="padding-left: 30px">
<h2>Đăng kí tài khoản mới!</h2>
<p><span class="error">Dấu * là trường bắt buộc.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Tên người dùng: <input type="text" name="user"/>
    <span class="error">* <?php echo $userErr;?></span>
    <br><br>
    Email: <input type="email" name="email"/>
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    Mật khẩu: <input type="password" name="matkhau"/>
    <span class="error">* <?php echo $matkhauErr;?></span>
    <br><br>
    Xác nhận mật khẩu: <input type="password" name="matkhau1"/>
    <span class="error">* <?php echo $matkhau1Err;?></span>
    <br><br>
    <input type="submit" name="submit" value="Gửi"/><br />
    <br /><a href="../">Trở về trang chủ</a>
</form>
</body>
</html>