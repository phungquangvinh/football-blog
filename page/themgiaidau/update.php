<?php

/**
 * @author GallerySoft.info
 * @copyright 2017
 */
include('../../config.php'); session_start();
if(empty($_SESSION['ten'])){
    header('Location: ../');
} else if($_SESSION['ten']!='admin'){
    header("Location: ../admin/error.php");
 }
$id = $_GET["id"];
$sql = "SELECT * FROM giai_dau where id='$id'";
$ket_qua = mysqli_query($connect, $sql);
while ($row = mysqli_fetch_array($ket_qua)){
?>
<!doctype html>
<html>
<head>
    <title>Chỉnh sửa giải đấu <?php echo $row["ten_giai_dau"]?></title>    
</head>
<body>
    <p>Chào mừng '<?php echo $_SESSION['ten']; ?>' đến với trang Chỉnh sửa giải đấu! 
    <a href="../destroy.php">Đăng xuất</a>!</p>
    <a href="../admin">Trở về trang quản trị</a><br /><br />
    <a href="../../">Trở về trang chủ</a>
    <h3>Chỉnh sửa giải đấu</h3>
    <p class="error">Dấu * là trường bắt buộc.</p>
    <form action="control.php?id=<?php echo $id;?>" method="post" name="image" enctype="multipart/form-data">
        Tên giải đấu: <input type="text" id="" name="title" value="<?php echo $row["ten_giai_dau"];?>"/>
        <span class="error">* </span><br /><br />
        Mô tả giải đấu:<br /><br />
        <textarea class="" name="mo_ta" cols="100" rows="20"><?php echo $row["mo_ta"];?></textarea>
        <span class="error">* </span><br /><br />
        Địa điểm: <input type="text" id="" name="diadiem" value="<?php echo $row["dia_diem"]?>"/>
        <span class="error">* </span><br /><br />
        Logo giải đấu (ảnh ko quá 500kB):<br /><br />
        <input type="file" name="fileToUpload" id="fileToUpload" />
        <span class="error">* </span><br /><br />
        <?php }?>
        <input type="submit" value="CHỈNH SỬA GIẢI ĐẤU" name="submit"/>
    </form>    
</body>
</html>