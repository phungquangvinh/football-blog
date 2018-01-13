<?php

/**
 * @author GallerySoft.info
 * @copyright 2017
 */
 include 'config.php';
 $title = $diadiem = $image = $mo_ta = "";
 $id = $_GET["id"];
 session_start();
  $name = $_SESSION['ten'];
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
var_dump($target_file);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".<br>";
        $uploadOk = 1;
        $image = basename( $_FILES["fileToUpload"]["name"]);
    } else {
        echo "File is not an image.<br>";
        $uploadOk = 0;
    }
    if(!empty($_POST["title"])){
        $title = $_POST["title"];
    }
    if(!empty($_POST["diadiem"])){
        $diadiem = $_POST["diadiem"];
    }
    if(!empty($_POST["mo_ta"])){
        $mo_ta = $_POST["mo_ta"];
    }
    if($title != "" && $diadiem != "" && $image != ""){
        $sql = "UPDATE giai_dau SET ten_giai_dau='$title', mo_ta='$mo_ta',
        logo='$image', dia_diem='$diadiem' WHERE id='$id'";
        mysqli_query($connect, $sql);
        echo "Chỉnh sửa thành công!";?>
        <br /><a href="http://localhost/football-blog/page/admin">Trở về trang quản trị!</a>
        <?php
    }
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "File quá lớn.<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "File của bạn không thể upload.<br>";
    ?><a href="http://localhost/football-blog/page/user">Trở về trang blog!</a><?php
// if everything is ok, try to upload file
}  else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File ảnh ". basename( $_FILES["fileToUpload"]["name"]). " up thành công.<br>";
    } else {
        echo "Không thể up được file<br>";
        ?><a href="http://localhost/football-blog/page/user">Trở về trang blog!</a><?php
    }
} 

?>