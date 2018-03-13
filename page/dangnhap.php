<?php

/**
 * @author pqvinh
 * @copyright 2017
 */
 ob_start();
include('config.php');
include('function.php');
session_start();
$user = $matkhau = "";
$userErr = $matkhauErr = "";

if(isset($_SESSION['ten'])){
    if($_SESSION['ten'] != 'admin'){
        header("Location: user");
    } else header("Location: admin");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["user"])) {
    $userErr = "Bạn phải nhập username!";
  } else {
    $user = test_input($_POST["user"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9_]*$/",$user)) {
      $userErr = "Username không hợp lệ!"; 
    }
    // check username có t?n t?i hay không
    $results = mysqli_query($connect,"SELECT username FROM user WHERE username='$user'");
    //return total count
    $user_exist = mysqli_num_rows($results); //total records
 
    //n?u username khác 0 thì ko t?n t?i
    if($user_exist == 0) {
        $userErr= "Tên người dùng không tồn tại!";
    }else{
        echo "";
    }    
  }
  if (empty($_POST["matkhau"])) {
    $matkhauErr = "Nhập mật khẩu!";
  } else{
    $matkhau = md5(test_input($_POST["matkhau"]));
    $sql = "select password from user where username='$user' and password='$matkhau'";
    $result = mysqli_query($connect, $sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows == 0){
        $matkhauErr = "Mật khẩu không đúng!";
    }else {
        echo "";
    }
  }
  if ($user != "" && $matkhau != "" &&
  $userErr == "" && $matkhauErr == ""){
    $id_role = "select id_role from user where username='$user'";
    $id = mysqli_query($connect, $id_role);
    $_SESSION['ten'] = $_POST['user'];
    $_SESSION['pass'] = $_POST['matkhau'];
    while ($row = mysqli_fetch_array($id)){
        $ket_qua = $row['id_role'];
        $_SESSION['id'] = $ket_qua;
    }
    if($ket_qua == 1){
        header('location:admin/index.php');
    } else header('location:user/index.php');
   } 
}


?>