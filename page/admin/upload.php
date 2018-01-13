<?php

/**
 * @author GallerySoft.info
 * @copyright 2017
 */
 include 'config.php';
 $title = $write = $image = "";
 $id = $_GET["id"];
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
    if(!empty($_POST["write"])){
        $write = $_POST["write"];
    }
    if($title != "" && $write != "" && $image != ""){
        $sql = "UPDATE bai_viet SET tieu_de='$title', bai_viet='$write',
        image='$image' WHERE id='$id'";
        if (mysqli_query($connect, $sql)){
            echo "Chỉnh sửa thành công!";
        }
        ?><br /><br />
        <a href="http://localhost/football-blog/page/admin">Trở về trang quản trị!</a>
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
    ?><a href="http://localhost/football-blog/page/admin">Trở về trang quản trị!</a><?php
// if everything is ok, try to upload file
}  else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "File ảnh ". basename( $_FILES["fileToUpload"]["name"]). " up thành công.<br>";
    } else {
        echo "Không thể up được file<br>";
        ?><br /><a href="http://localhost/football-blog/page/admin">Trở về trang quản trị!</a><?php
    }
} 

?>