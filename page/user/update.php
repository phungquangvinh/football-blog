<?php

/**
 * @author pqvinh
 * @copyright 2017
 */

include '../../form.php';
include('../function.php');

 if(empty($_SESSION['ten'])){
    header("Location: ../");
 } else if($_SESSION['ten']=='admin'){
    header("Location: ../admin/error.php");
 }

$x = $_GET['id'];
$y = mysqli_query($connect, "SELECT * FROM user WHERE id='$x' ");

//tạo form
$user = $email = $matkhau = $matkhau1 = $matkhau2 ="";
$userErr = $emailErr = $matkhauErr = $matkhau1Err =$matkhau2Err ="";
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

  if (empty($_POST["matkhau2"])) {
    $matkhau2Err = "Bạn phải nhập mật khẩu cũ!";
  } else{
    $matkhau2 = md5(test_input($_POST["matkhau"]));
  }

  if ($user != "" && $email != "" && $matkhau != "" && $matkhau1 != "" &&
  $userErr == "" && $emailErr =="" && $matkhauErr =="" && $matkhau1Err ==""){
    $sql = "UPDATE user SET username='$user', email='$email',
        password='$matkhau' WHERE id='$x'";
    
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
  <?php while ($row = mysqli_fetch_array($y)) { ?>  
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	    Tên người dùng: <input type="text" name="user" value="<?php echo $row['username'] ?>" />
	    <span class="error">* <?php echo $userErr; ?></span>
	    <br><br>
	    Email: <input type="email" name="email" value="<?php echo $row['email'] ?>"/>
	    <span class="error">* <?php echo $emailErr; ?></span>
	    <br><br>
	    Mật khẩu cũ: <input type="password" name="matkhau2" />
	    <span class="error">* <?php echo $matkhau2Err; ?></span>
	    <br><br>
	    Mật khẩu mới: <input type="password" name="matkhau"/>
	    <span class="error">* <?php echo $matkhauErr;?></span>
	    <br><br>
	    Xác nhận mật khẩu mới: <input type="password" name="matkhau1"/>
	    <span class="error">* <?php echo $matkhau1Err;?></span>
	    <br><br>
	    <input type="submit" name="submit" value="Gửi"/><br />
	    <br /><a href="../">Trở về trang chủ</a>
	</form><?php } ?>
</body>
</html>