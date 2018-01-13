<?php

/**
 * @author pqvinh
 * @copyright 2017
 */
 include 'config.php';
 session_start();
 if(empty($_SESSION['ten'])){
    header('Location: http://localhost/football-blog/page');
 } else if($_SESSION['ten']!='admin'){
    header("Location: http://localhost/football-blog/page/admin/error.php");
 }
?>
<!doctype html>
<html>
<head>
    <title>Thêm giải đấu</title>
    <style> .error{color: #ff0000;}</style>
</head>
<body>
    <p>Chào mừng '<?php echo $_SESSION['ten']; ?>' đến với trang Thêm giải đấu! 
    <a href="destroy.php">Đăng xuất</a>!</p>
    <a href="/football-blog/page/admin">Trở về trang quản trị</a><br /><br />
    <a href="/football-blog">Trở về trang chủ</a>
    <h3>Thêm giải đấu</h3>
    <p class="error">Dấu * là trường bắt buộc.</p>
    <form action="upload.php" method="post" name="image" enctype="multipart/form-data">
        Tên giải đấu: <input type="text" id="" name="title"/>
        <span class="error">* </span><br /><br />
        Mô tả giải đấu:<br /><br />
        <textarea class="" name="mo_ta" cols="100" rows="20"></textarea>
        <span class="error">* </span><br /><br />
        Địa điểm: <input type="text" id="" name="diadiem"/>
        <span class="error">* </span><br /><br />
        Logo giải đấu (ảnh ko quá 500kB):<br /><br />
        <input type="file" name="fileToUpload" id="fileToUpload" />
        <span class="error">* </span><br /><br />
        <input type="submit" value="THÊM GIẢI ĐẤU" name="submit"/>
    </form>
</body>
</html>