<?php

/**
 * @author pqvinh
 * @copyright 2017
 */

include ('../../config.php');
session_start();
if(empty($_SESSION['ten']) || empty($_SESSION['pass'])){
    header("Location: ../");
 } else if($_SESSION['ten']!='admin'){
    header("Location: error.php");
}
$sql = "SELECT * FROM bai_viet";
$ket_qua = mysqli_query($connect, $sql);
echo "<table border = '1px'>
 <tr>
  <td style='text-align: center'>User</td>
  <td style='text-align: center'>Giải đấu</td>
  <td style='text-align: center'>Tiêu đề</td>
  <td style='text-align: center'>Bài viết</td>
  <td style='text-align: center'>Hình ảnh</td>
  <td style='text-align: center'>Ngày tạo</td>
  <td style='text-align: center'>Hành động</td>
 </tr>";

while ($row = mysqli_fetch_array($ket_qua)){     
    echo "<tr>";
      $image = $row["image"];
      $abc = "http://localhost/football-blog/page/user/images/";
      $file = $abc. $image;
      echo "<td style='text-align: center'>".$row["user"]."</td>";
      echo "<td style='text-align: center'>".$row["competition"]."</td>";
      echo "<td style='text-align: center'>".$row["tieu_de"]."</td>";
      echo "<td style='text-align: center'>".$row["bai_viet"]."</td>";
      ?><td><img src="<?= $file ?>" style="width: 300px;"/></td><?php
      echo "<td style='text-align: center'>".$row["ngay_tao"]."</td>"; 
      ?>
      <td style='text-align: center'><a href="kiemduyet.php?id=<?php echo $row["id"];?>">
       Duyệt bài viết </a></td>
       <?php 
    echo "</tr>";
}
?>
<!doctype html>
<html>
<head>
    <title>admin</title>
</head>
<body>
    <p>Chào mừng '<?php
        echo $_SESSION['ten'];
    ?>' đến với trang quản trị bóng đá! <a href="../destroy.php">Đăng xuất</a></p>
    <a href="../themgiaidau">Thêm giải đấu!</a><br /><br />
    <a href="../../">Trở về trang chủ</a><br /><br />
    <a href="acc.php">Quản lý thành viên</a>
    <h3>Danh sách bài viết:</h3>    
</body>
</html>