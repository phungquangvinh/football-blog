<div class="background">			
	<div class="logo">
		<a href="../../"><img src="images/79df3d3d98111bd1f41aae6e02b16742--messi-neymar.jpg"
        style="width: 100px;"></a>
	</div>		
</div>
<div class="menu">
<ul>
    <li><a href="../../">HOME</a></li>
	<li class="dropdown">
	  <span class="dropbtn">TIN TỨC</span>
	  <div class="dropdown-content">
		<?php while ($row1 = mysqli_fetch_array($result)){
		    ?><a target="_blank" href="../../giaidau.php?giaidau=<?php echo $row1["id"];?>"><?php echo $row1["ten_giai_dau"];?></a><?php
		}?>
	  </div>
	</li>
	<li class="dropdown">
	  <span class="dropbtn">THỂ THAO VIỆT NAM</span>
	  <div class="dropdown-content">
		<a href="../../giaidau.php?giaidau=6">BÓNG ĐÁ</a>
		<a href="#">CÁC MÔN KHÁC</a>
		<a href="#">BÀN LUẬN</a>
        <a href="#">AFF CUP 2016</a>
	  </div>
	</li>            
	<li class="dropdown">
	  <span class="dropbtn">CUP CHÂU ÂU</span>
	  <div class="dropdown-content">
		<a href="../../giaidau.php?giaidau=5">CHAMPIONS LEAGUE</a>
		<a href="#">EUROPA LEAGUE</a>
		<a href="#">SIÊU CUP CHÂU ÂU</a>
		<a href="#">EURO 2016</a>
	  </div>
	</li>
	<li class="dropdown">
	  <span class="dropbtn">BLOG</span>
	  <div class="dropdown-content">
		<a href="../">ĐĂNG NHẬP</a>
		<a href="index.php">VÀO FORUM</a>
	  </div>
	</li>
	<li class="dropdown">
	  <span class="dropbtn">LIÊN HỆ</span>
	  <div class="dropdown-content" style="width: 167px;">
	  	<a href="#">QUẢNG CÁO</a>
		<a href="#">LIÊN HỆ 2</a>
		<a href="../themgiaidau">THÊM GIẢI ĐẤU</a>
	  </div>
	</li>
</ul>
<form target="_blank" action="../../search.php">
  <input class="text-search" type="text" placeholder="Enter the key word here" value="" name="search">
  <input class="submit" type="submit" name="ok" value="">
</form>
</div><br><br>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/manchester-city-new-crest.jpg" alt="Manchester City">
    </div>
    <div class="carousel-item">
      <img src="images/main_sp.jpg" alt="Barcelona">
    </div>
    <div class="carousel-item">
      <img src="images/leicester.jpg" alt="Leicester">
    </div>
    <div class="carousel-item">
      <img src="images/17353312_1851162671822409_6107876628662397732_n.jpg" alt="U20 World Cup">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
