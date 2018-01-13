<?php

/**
 * @author pqvinh
 * @copyright 2017
 */
ob_start();
include 'dangnhap.php';
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ðăng nhập tài khoản</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <style>.error {color: #ff0000;}</style>
</head>

<body>
    <h1>Ðăng nhập tài khoản</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Tên nguời dùng: <input type="text" name="user"/>
        <span class="error"> <?php echo $userErr;?></span>
        <br><br>
        Mật khẩu: <input type="password" name="matkhau"/>
        <span class="error"> <?php echo $matkhauErr;?></span>
        <br><br>
        Luu mật khẩu: <input type="checkbox" name="checkbox"/>
        <br><br>
        <input type="submit" name="submit" value="Ðăng nhập"/> 
    </form><br />
    <a>Bạn chưa có tài khoản?</a>
    <a href="dangki.php">Ðăng kí ngay!</a><br />
    <br /><a href="/football-blog">Trang chủ</a>
</body>
</html>