<?php

/**
 * @author pqvinh
 * @copyright 2017
 */
include('config.php'); session_start();
if(empty($_SESSION['ten'])){
    header('Location: http://localhost/football-blog/page');
 }
$id = $_GET["id"];
$sql = "SELECT * FROM bai_viet where id='$id'";
$ket_qua = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($ket_qua)){
?>
<!doctype html>
<html>
<head>
    <title>Duyệt bài viết</title>
    <style> .error{color:  #ff0000;}</style>
</head>
<body>
    <h3>Duyệt bài viết người dùng: <?php echo $row["user"];?></h3>
    <a href="index.php">Trở về trang quản trị</a><br /><br />
    <form action="upload.php?id=<?php echo $id;?>" method="post" name="image" enctype="multipart/form-data">
        Tiêu đề bài viết: <input type="text" id="" name="title" value="<?php echo $row["tieu_de"]?>"/>
        <span class="error">* </span><br /><br />
        Bài viết (không chứa teen code, đúng chuẩn ngữ pháp tiếng Việt):<br /><br />
        <textarea class="" name="write" cols="100" rows="20"><?php echo $row["bai_viet"]?></textarea>
        <span class="error">* </span><br /><br />
        Tải hình ảnh:
        <input type="file" name="fileToUpload" id="fileToUpload" value="<?php echo $row["image"]?>"/><br /><br />
        <?php }?>
        <input type="submit" value="CHỈNH SỬA BÀI ĐĂNG" name="submit"/>
    </form>
</body>
</html>