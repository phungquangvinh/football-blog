<?php

/**
 * @author pqvinh
 * @copyright 2017
 */
 include 'config.php';
 session_start();
 if(empty($_SESSION['ten'])){
    header('Location: http://localhost/football-blog/page');
 } else if($_SESSION['ten']=='admin'){
    header("Location: http://localhost/football-blog/page/admin/error.php");
 }
?>
<!doctype html>
<html>
<head>
    <title>user</title>
    <style> .error{color: #ff0000;}</style>
</head>
<body>
    <p>Chào mừng '<?php echo $_SESSION['ten']; ?>' đến với trang blog bóng đá! 
    <a href="destroy.php">Đăng xuất</a>!</p>
    <a href="/football-blog">Trở về trang chủ</a>
    <h3>Đăng bài để đưa ra cảm nhận của bạn...</h3>
    <p class="error">Dấu * là trường bắt buộc.</p>
    <form action="upload.php" method="post" name="image" enctype="multipart/form-data">
        Chọn giải đấu: 
        <select class="" name="com">
            <option></option>
        <?php
            $sql = "SELECT * FROM giai_dau";
            $ket_qua = mysqli_query($connect, $sql);
            while ($row = mysqli_fetch_array($ket_qua)){
        ?>
            <option value="<?php echo $row["id"]?>"><?php echo $row["ten_giai_dau"]?></option>
            <?php }?>
        </select><span class="error">* </span><br /><br />
        Tiêu đề bài viết: <input type="text" id="" name="title"/>
        <span class="error">* </span><br /><br />
        Bài viết (không chứa teen code, đúng chuẩn ngữ pháp tiếng Việt):<br /><br />
        <textarea class="" name="write" cols="100" rows="20"></textarea>
        <span class="error">* </span><br /><br />
        Tải hình ảnh:
        <input type="file" name="fileToUpload" id="fileToUpload" />
        <span class="error">* </span><br /><br />
        <input type="submit" value="GỬI BÀI ĐĂNG" name="submit"/>
    </form>
</body>
</html>