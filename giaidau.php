<?php

/**
 * @author GallerySoft.info
 * @copyright 2017
 */
include 'config.php';
include 'form.php';

$id = $_GET["giaidau"];
$ketqua = mysqli_query($connect, "SELECT * FROM giai_dau where id='$id'");

?>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css">
        <link rel="stylesheet" type="text/css" href="./css/giaidau.css">
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
            $abc = "http://localhost/football-blog/page/themgiaidau/images/";
            $file = $abc. $image; 
        ?>
        <title><?php echo $title;?></title>
    </head>
    <body>
        <div class="wrapper">
            <div id="header">
                <?php include 'header.php';?>
            </div>
            <div class="gioithieu">
                <h3>Tên giải đấu: <?php echo $title;?></h3><hr>
                <img src="<?= $file ?>" style="width: 750px;"/><br />
                <p style="width: 750px;"><?php    
                echo $row["mo_ta"]."<br><br>";
                echo "Địa điểm: ".$row["dia_diem"];?></p>
                <?php }?>
                <a href="/football-blog/page/themgiaidau/update.php?id=<?php echo $id;?>">
                Chỉnh sửa giải đấu</a><br /><br />
                <a href="index.php">Quay về trang chủ</a>
            </div>  <hr>      
            <div class="baiviet">
                <h3>Danh sách bài viết:</h3> 
                <?php
                    $sqli = "SELECT * FROM bai_viet where competition='$id'";
                    $result = mysqli_query($connect, $sqli);
                    while ($row1 = mysqli_fetch_array($result)){
                    $image = $row1["image"];
                    $abc = "http://localhost/football-blog/page/user/images/";
                    $file = $abc. $image;?>  
                <div class="user">                                
                    <img src="<?= $file ?>" style="width: 300px;"/><br />
                    <h3><?php echo $row1["tieu_de"]."<br />";?></h3>
                    <?php echo $row1["bai_viet"]."<br /><br />";?>
                    <a href="/football-blog/page/admin/kiemduyet.php?id=<?php echo $row1["id"];?>">
                    Chỉnh sửa bài viết</a>                
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