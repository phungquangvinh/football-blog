<?php
	/**
	 * @author GallerySoft.info
	 * @copyright 2017
	 */
	
 include 'form.php';
?>
<!doctype html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" charset='UTF-8'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 
</head>
<body>
<div class="wrapper">
    <div id="header">
		<?php include 'header.php';?>
    </div>
	<script language="JavaScript" src="script.js"></script>
	<div class="main">
		<div class="container">
            <div class="title-dichvu">
                <p>BÀI VIẾT HÀNG ĐẦU</p>
            </div>
			<div class="content">
            <?php while ($row = mysqli_fetch_array($ket_qua)){
			     $image = $row["image"];
                $abc = "http://localhost/football-blog/page/user/images/";
                $file = $abc. $image;
             ?>
				<div class="dichvu">
					<img src="<?= $file ?>" style="300px"/>                    
					<h3><?php echo $row["tieu_de"];?></h3>
					<p><?php echo $row["bai_viet"];?></p>
					<a href="page/admin">CHI TIẾT</a>
				</div><?php } ?>				
			</div>
            <div class="linhtinh">
                <?php include 'linhtinh.php';?>
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
		<?php include 'footer.php';?>
	</div>
</div>
</body>
</html>