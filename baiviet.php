<?php
	include 'form.php';

	if(isset($_POST['submit'])){
	    header("Location: page/dangki.php");
	}
	
	$write = $_GET['baiviet'];
	$baiviet = mysqli_query($connect, "SELECT * FROM bai_viet WHERE tieu_de='$write'")
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" charset='UTF-8'>
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="css/style.css">
	  <link rel="stylesheet" type="text/css" href="css/giaidau.css">  
	  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 
	  <!-- slideshow bootsrap -->
	  <link rel="stylesheet" href="css/bootstrap.min.css">
	  <script src="js/jquery.min.js"></script>
	  <script src="js/popper.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <!-- end slideshow -->
	  <?php
	  	while ($abc = mysqli_fetch_array($baiviet)) {
	  		$title = $abc['tieu_de'];
	  		$image = $abc['image'];
	  		$ab = "page/user/images/";
            $file = $ab. $image;
	  		$content = $abc['bai_viet'];
	  		$day = $abc['ngay_tao'];
	  ?>
	  <title><?php echo $title; ?></title>
</head>
<body>
	<div id="header">
		<?php include 'header.php'; ?>
	</div>
	<div class="gioithieu">
		<img src="<?= $file ?>" style="max-width: 800px; max-height: 400px;"/><br /><br />
		<h3><?php echo $title; ?></h3><br />
		<p>Ngày đăng: <?php echo $day; ?></p><br />
		<p><?php echo $content; ?></p>
	</div>
	<?php } ?>
	<div id="bando">
        <?php include 'bando.php';?>
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
</body>
</html>