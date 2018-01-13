<div class="background">			
	<div class="logo">
		<a href="index.php"><img src="images/79df3d3d98111bd1f41aae6e02b16742--messi-neymar.jpg"
        style="width: 100px;"></a>
	</div>		
</div>
<div class="menu">
<ul>
    <li><a href="index.php">HOME</a></li>
	<li class="dropdown">
	  <span class="dropbtn">TIN TỨC</span>
	  <div class="dropdown-content">
		<?php while ($row1 = mysqli_fetch_array($result)){
		    ?><a target="_blank" href="giaidau.php?giaidau=<?php echo $row1["id"];?>"><?php echo $row1["ten_giai_dau"];?></a><?php
		}?>
	  </div>
	</li>
	<li class="dropdown">
	  <span class="dropbtn">THỂ THAO VIỆT NAM</span>
	  <div class="dropdown-content">
		<a href="giaidau.php?giaidau=6">BÓNG ĐÁ</a>
		<a href="#">CÁC MÔN KHÁC</a>
		<a href="#">BÀN LUẬN</a>
        <a href="index.php">AFF CUP 2016</a>
	  </div>
	</li>            
	<li class="dropdown">
	  <span class="dropbtn">CUP CHÂU ÂU</span>
	  <div class="dropdown-content">
		<a href="giaidau.php?giaidau=5">CHAMPIONS LEAGUE</a>
		<a href="#">EUROPA LEAGUE</a>
		<a href="#">SIÊU CUP CHÂU ÂU</a>
		<a href="#">EURO 2016</a>
	  </div>
	</li>
	<li class="dropdown">
	  <span class="dropbtn">BLOG</span>
	  <div class="dropdown-content">
		<a href="page">ĐĂNG NHẬP</a>
		<a href="page/user">VÀO FORUM</a>
	  </div>
	</li>
	<li class="dropdown">
	  <span class="dropbtn">LIÊN HỆ</span>
	  <div class="dropdown-content" style="width: 167px;">
		<a href="page">
        QUẢNG CÁO</a>
		<a href="/vinh/t-electronics">LIÊN HỆ 2</a>
		<a href="page/themgiaidau">THÊM GIẢI ĐẤU</a>
	  </div>
	</li>
</ul>
<form target="_blank" action="search.php">
  <input class="text-search" type="text" placeholder="Enter the key word here" value="" name="search">
  <input class="submit" type="submit" name="ok" value="">
</form>
</div>
<div class="slideshow-container">
	<div class="container">
		<div class="mySlides fade">
			<img src="images/manchester-city-new-crest.jpg">
		</div>

		<div class="mySlides fade">
			<img src="images/main_sp.jpg">
		</div>

		<div class="mySlides fade">
			<img src="images/leicester.jpg">
		</div>
        
        <div class="mySlides fade">
			<img src="images/17353312_1851162671822409_6107876628662397732_n.jpg">
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	</div>
	
</div>
<br>

<div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<span class="dot" onclick="currentSlide(3)"></span> 
    <span class="dot" onclick="currentSlide(4)"></span>
</div>