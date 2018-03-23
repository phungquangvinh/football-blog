<?php

/**
 * @author pqvinh
 * @copyright 2017
 */
 include '../../config.php';
include '../../form.php';

 if(empty($_SESSION['ten'])){
    header("Location: ../");
 } else if($_SESSION['ten']=='admin'){
    header("Location: ../admin/error.php");
 }
?>
<!doctype html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" charset='UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" type="text/css" href="../../css/style.css">  
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 
    <!-- slideshow bootsrap -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <script src="../../js/jquery.min.js"></script>
    <script src="../../js/popper.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <!-- end slideshow -->
    <style> .error{color: #ff0000;}</style>
</head>
<body>
    <div class="wrapper">
        <div id="header">
            <?php include 'header.php';?>
        </div>
        <div class="main">
            <p>Chào mừng '<?php echo $_SESSION['ten']; ?>' đến với trang blog bóng đá! 
            <a href="../destroy.php">Đăng xuất</a>!</p>
            <a href="../../">Trở về trang chủ</a>
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
            <br><br>
            <div id="bando">
                <?php include '../../bando.php';?>
            </div>
        </div>
        <div class="brand">
        <div class="title-logo">
          <a>SLIDE LOGO</a>
        </div>
        <div class="list-logo">
          <ul>
            <li><a href="#"><img src="images/04HOME_06.png"></a></li>
            <li><a href="#"><img src="images/05HOME_06.png"></a></li>
            <li><a href="#"><img src="images/06HOME_06.png"></a></li>
            <li><a href="#"><img src="images/07HOME_06.png"></a></li>
            <li><a href="#"><img src="images/08HOME_06.png"></a></li>
            <li><a href="#"><img src="images/09HOME_06.png"></a></li>
          </ul>
        </div>
      </div>
      <div class="footer">
        <?php include 'footer.php';?>
      </div>
    </div>    
</body>
</html>