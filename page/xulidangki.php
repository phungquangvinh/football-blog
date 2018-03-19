<?php

/**
 * @author pqvinh
 * @copyright 2017
 */
ob_start();
include('../config.php');
include('function.php');
//tạo form
$user = $email = $matkhau = $matkhau1 = "";
$userErr = $emailErr = $matkhauErr = $matkhau1Err ="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"])) {
    $userErr = "Bạn phải nhập username!";
  } else {
    $user = test_input($_POST["user"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$user)) {
      $userErr = "Username không hợp lệ!"; 
    }
    // check username đa tồn tại
    $results = mysqli_query($connect,"SELECT username FROM user WHERE username='$user'");
    //return total count
    $user_exist = mysqli_num_rows($results); //total records
 
    //if value is more than 0, username is not available
    if($user_exist != 0) {
        $userErr= "Tên người dùng đã tồn tại!";
    }else{
        echo "";
    }    
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Bạn phải nhập email!";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Email không phù hợp!"; 
    }
    // check email đa tồn tại
    $result = mysqli_query($connect,"SELECT email FROM user WHERE email='$email'");
    //return total count
    $email_exist = mysqli_num_rows($result); //total records
 
    //if value is more than 0, username is not available
    if($email_exist != 0) {
        $emailErr= "Email đã tồn tại!";
    }else{
        echo "";
    }    
  }
  
  if (empty($_POST["matkhau"])) {
    $matkhauErr = "Nhập mật khẩu!";
  } else{
    $matkhau = md5(test_input($_POST["matkhau"]));
  }
  
  if (empty($_POST["matkhau1"])) {
    $matkhau1Err = "Xác nhận mật khẩu!";
  } else{
    $matkhau1 = md5(test_input($_POST["matkhau1"]));
    if($matkhau1 != $matkhau) {
        $matkhau1Err = "Xác nhận lại mật khẩu!";
    }
  }
  if ($user != "" && $email != "" && $matkhau != "" && $matkhau1 != "" &&
  $userErr == "" && $emailErr =="" && $matkhauErr =="" && $matkhau1Err ==""){
    $sql = "INSERT INTO user (username, email, password)
    VALUES ('$user', '$email', '$matkhau')";
    
    if (mysqli_query($connect, $sql)) {
    echo "<br>"."Đăng kí thành công!";
    ?>
    <a href="../">Quay trở lại trang chủ</a> 
    <?php
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connect);
    }
  }
}

//Đóng dữ liệu
mysqli_close($connect);
?>