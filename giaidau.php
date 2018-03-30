<?php

/**
 * @author GallerySoft.info 
 * @copyright 2017
 */
include 'form.php';
include 'header.php';
if(isset($_POST['submit'])){
    header("Location: page/dangki.php");
}

$id = $_GET["giaidau"];
$ketqua = mysqli_query($connect, "SELECT * FROM giai_dau where id='$id'");

?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/giaidau.css">
        <!-- slideshow bootsrap -->
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <!-- end slideshow -->
        <?php
        while ($row = mysqli_fetch_array($ketqua)){
            $title = $row["ten_giai_dau"];
            $image = $row["logo"];
            $abc = "page/themgiaidau/images/";
            $file = $abc. $image; 
        ?>
        <title><?php echo $title;?></title>
    </head>
    <body>
        <div class="wrapper">
            <div class="gioithieu">
                <h3>Tên giải đấu: <?php echo $title;?></h3><hr>
                <img src="<?= $file ?>" style="width: 750px;"/><br />
                <p style="width: 750px;"><?php    
                echo $row["mo_ta"]."<br><br>";
                echo "Địa điểm: ".$row["dia_diem"];?></p>                
                <a href="page/themgiaidau/update.php?id=<?php echo $id;?>">
                Chỉnh sửa giải đấu</a><br />
                <a href="index.php">Quay về trang chủ</a>
            </div><hr><?php }?><br /><br />      
            <div class="baiviet">
                <h3>Danh sách bài viết:</h3> 
                <?php
                    $sqli = "SELECT * FROM bai_viet where competition='$id'";
                    $result = mysqli_query($connect, $sqli);
                    while ($row1 = mysqli_fetch_array($result)){
                    $image = $row1["image"];
                    $abc = "page/user/images/";
                    $file = $abc. $image;?>  
                <div class="user">                                
                    <img src="<?= $file ?>" style="width: 360px;"/><br />
                    <h3><?php echo $row1["tieu_de"]."<br />";?></h3>
                    <a href="baiviet.php?baiviet=<?php echo $row1["tieu_de"]; ?>">CHI TIẾT</a>            
                </div><?php }?>                       
            </div>
            <div id="bando">
                <?php include 'bando.php';?>
            </div>
            <div class="footer">
                <?php include 'footer.php';?>
            </div>                       
        </div>        
    </body>
</html>