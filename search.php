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
	<title>Tìm kiếm</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">	
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
                    <?php 
                    if (isset($_REQUEST['ok'])) {
                        // Gán hàm addslashes để chống sql injection
                        $search = addslashes($_GET['search']);
                    
                        // Nếu $search rỗng thì quay trở lại trang chủ.
                        if (empty($search)) {
                            header("Location: index.php");
                        } else {
                            // Dùng câu lênh like trong sql và sứ dụng toán tử % của php để tìm kiếm dữ liệu chính xác hơn.
                            $query = "select * from bai_viet where tieu_de like '%$search%' OR bai_viet like '%$search%'";
                            $timkiem = mysqli_query($connect, $query); 
                            $num = mysqli_num_rows($timkiem);
                            // Nếu có kết quả thì hiển thị, ngược lại thì thông báo không tìm thấy kết quả
                            echo "KẾT QUẢ TÌM KIẾM <b>'$search'</b>";
                            if ($num > 0 && $search != "") 
                            {
                                // Dùng $num để đếm số dòng trả về.                                            
                    ?>
                </div>
    			<div class="content">
                    <?php while ($row2 = mysqli_fetch_array($timkiem)) {
                        $image = $row2["image"];
                        $abc = "page/user/images/";
                        $file = $abc. $image;
                    ?>                
                    <div class="dichvu">                    
                        <img src="<?= $file ?>" style="300px"/>                    
    					<h3><?php echo $row2["tieu_de"];?></h3>
    					<a href="baiviet.php?baiviet=<?php echo $row2["tieu_de"]; ?>">CHI TIẾT</a>                    
                    </div>	<?php }}
                        else echo "<br><br>"."Không có kết quả tìm kiếm với từ <b>'$search'</b>";
                    }}?>			
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
    		<?php include 'footer.php';?>
    	</div>
    </div>
</body>
</html>