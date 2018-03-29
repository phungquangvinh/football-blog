<?php
  /**
   * @author GallerySoft.info 
   * @copyright 2017
   */
  
 include 'form.php';
 if(isset($_POST['submit'])){
    header("Location: page/dangki.php");
}
?>
<!doctype html>
<html>
<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" charset='UTF-8'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">  
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 
  <!-- slideshow bootsrap -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- end slideshow -->
</head>
<body>
<div class="wrapper">
    <div id="header">
        <?php include 'header.php';?>
    </div>
  <div class="main">
    <div class="container">
        <div class="title-dichvu">
            <p>BÀI VIẾT HÀNG ĐẦU</p><hr>
        </div>
      <div class="content">
            <?php while ($row = mysqli_fetch_array($ket_qua)){
           $image = $row["image"];
                $abc = "page/user/images/";
                $file = $abc. $image;
             ?>
        <div class="dichvu">
          <img src="<?= $file ?>" style="max-width:320px; height: 200px;"/>                    
          <h3><?php echo $row["tieu_de"];?></h3>
          <a href="baiviet.php?baiviet=<?php echo $row["tieu_de"]; ?>">CHI TIẾT</a>
        </div><?php } ?>        
      </div>
      <div id="bando">
          <?php include 'bando.php';?>
      </div>
    </div><!-- end container -->
  </div><!-- end main -->
  
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
    <?php 
        include 'footer.php';
    ?>
  </div>
</div>
</body>
</html>