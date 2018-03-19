<?php
include '../../config.php';
session_start();
if(empty($_SESSION['ten']) || empty($_SESSION['pass'])){
    header("Location: ../");
 } else if($_SESSION['ten']!='admin'){
    header("Location: error.php");
}

$sql = "SELECT * FROM user";
$ket_qua = mysqli_query($connect, $sql);
echo "<table border = '1px'>
 <tr>
  <td style='text-align: center'>ID thành viên</td>
  <td style='text-align: center'>Tên người dùng</td>
  <td style='text-align: center'>Email</td>
  <td style='text-align: center'>Ngày tạo</td>
  <td style='text-align: center'>Cấp quyền</td>
  <td style='text-align: center'>Hành động</td>
 </tr>";

while ($row = mysqli_fetch_array($ket_qua)){     
    echo "<tr>";
      echo "<td style='text-align: center'>".$row["id"]."</td>";
      echo "<td style='text-align: center'>".$row["username"]."</td>";
      echo "<td style='text-align: center'>".$row["email"]."</td>";
      echo "<td style='text-align: center'>".$row["create_at"]."</td>";
      echo "<td style='text-align: center'>".$row["id_role"]."</td>"; 
      ?>
      <td style='text-align: center'><a href="notify.php?id=<?php echo $row["id"];?>">
       Ban nick</a></td>
       <?php 
    echo "</tr>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quản lý thành viên</title>
</head>
<body>
	<p>Chào mừng '<?php
        echo $_SESSION['ten'];
    ?>' đến với trang quản lý thành viên!   <a href="../destroy.php">Đăng xuất</a></p>
    <a href="../themgiaidau">Thêm giải đấu!</a><br /><br />
    <a href="index.php">Trở về trang quản trị</a><br /><br />
    <a href="../../">Trở về trang chủ</a>
	<h1>Quản lý thành viên</h1>
</body>
</html>