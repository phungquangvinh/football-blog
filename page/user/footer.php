<div class="image01">
	<a href="#"><img src="images/20170421163138-vong-loai-u16-chau-a.jpg"
    style="width: 100%;height: 400px;"></a>
</div>
<div class="footer-menu">
	<div class="lienhe">
		<h3>THỂ THAO VIỆT NAM</h3>
		<ul>
			<li style="margin-top: 10px;"><a href="#">Đội tuyển Quốc gia</a></li>
			<li style="margin-top: 10px;"><a href="#">Các giải trẻ</a></li>
			<li style="margin-top: 10px;"><a href="#">V-LEAGUE</a></li>
			<li style="margin-top: 10px;"><a href="#">AFF CUP 2016</a></li>
			<li style="margin-top: 10px;"><a href="#">Các môn thể thao khác</a></li>
			<li style="margin-top: 10px;"><a href="#">Bàn luận</a></li>
		</ul>
	</div>
	<div class="dichvuchinh">
		<h3>TIN TỨC</h3>
        <ul>
            <?php while ($row2 = mysqli_fetch_array($result2)){
			    ?><li style="margin-top: 10px;">
			    <a href="giaidau.php?giaidau=<?php echo $row2["id"]?>"><?php echo $row2["ten_giai_dau"];?></a></li><?php
			}?>
        </ul>		
	</div>
	<div class="chinhsach">
		<h3>BLOG & QUẢNG CÁO</h3>
		<ul>
			<li style="margin-top: 10px;"><a href="../">Đăng nhập</a></li>
			<li style="margin-top: 10px;"><a href="index.php">Vào forum</a></li>
			<li style="margin-top: 10px;"><a href="#">Liên hệ quảng cáo</a></li>
			<li style="margin-top: 10px;"><a href="#">Liên hệ 1</a></li>
			<li style="margin-top: 10px;"><a href="#">Liên hệ 2</a></li>
			<li style="margin-top: 10px;"><a href="#">Liên hệ 3</a></li>
		</ul>
	</div>
	<div class="mail">
		<h3>ĐĂNG KÍ THÀNH VIÊN!</h3>
		<form method="post" action="">
		  <input class="text-search1" type="text" placeholder="Nhập email của bạn" value="" name="email">
		  <input class="submit1" type="submit" name="submit" value="GỬI">
		</form>
		<a>Nếu bạn là một tín đồ của môn thể thao vua, còn chờ gì nữa? Hãy gia nhập ngay với
        cộng đồng blog của chúng tôi!</a>
		<div class="mangxahoi">
			<h3>MẠNG XÃ HỘI</h3>
		</div>
	</div>
</div>
<div class="end">
	<ul>
		<li><a href="/football-blog">HOME</a></li>
		<li><a href="#">TIN TỨC</a></li>
		<li><a href="/football-blog/giaidau.php?giaidau=6">THỂ THAO VIỆT NAM</a></li>
		<li><a href="#">CUP CHÂU ÂU</a></li>
		<li><a href="page">BLOG</a></li>
		<li><a href="#">LIÊN HỆ</a></li>
	</ul>
	<p>&copy 2017 Store. All Rights Reserved. Designer by<a target="_blank" href="http://gmail.com" style="color: #0395f0"> v96hoangtucodon@gmail.com</a></p>
</div>