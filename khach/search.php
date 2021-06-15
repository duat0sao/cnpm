








<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>by Trần Nhật Duật</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					
					<a href="https://www.facebook.com/trannhatduat/"><span class="icon-facebook"></span></a>
					<a href="https://www.instagram.com/dua3t3rn2h/"><span class="icon-instagram"></span></a>
					<a href="https://github.com/huskywannafly3081"><span class="icon-github"></span></a>
				</div>
				<a class="active" href="index.php"> <span class="icon-home"></span> Home</a> 
				<a href="myaccount.php"><span class="icon-user"></span> My Account</a> 
				
				<a href="homthu.php"><span class="icon-envelope"></span> Hòm thư </a>
				<a href="giodo.php"><span class="icon-shopping-cart"></span> 2 Item(s) - <span class="badge badge-warning"> Đang cập nhập</span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="index.php"><span>NamDinhTeamPlus</span>                               
		<img src="../assets/img/logo-bootstrap-shoping-cart.png" alt="NamDinhTeamPlus">                         
          <!-- logo can hay đổi-->
	</a>
	</h1>
	</div>
	<div class="span4">
	
	</div>
	<div class="span4 alignR">
	<p><br> <strong> Support (24/7) :  190010 ko có  </strong><br><br></p>
	
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			
          <form action="search.php" class="navbar-search pull-right">
			  <input type="text" placeholder="Search" class="search-query span2" name="search" />
			  <input type="submit" name="ok" value="search" />
			</form>






            <!-- login -->
			
		  </div>
		</div>
	  </div>
	</div>





<!-- main -->


	<div class="row">
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		<li><a href="../displaydienthoai.php"><span class="icon-chevron-right"></span>Điện thoại</a></li>
		<li><a href="../displaymaytinh.php"><span class="icon-chevron-right"></span>Máy tính</a></li>
		<li><a href="../displaydongho.php"><span class="icon-chevron-right"></span>Đồng hồ</a></li>
		<li><a href="../displaylaptop.php"><span class="icon-chevron-right"></span>Laptop</a></li>
		<li><a href="../displaydiendandung.php"><span class="icon-chevron-right"></span>Điện dân dụng</a></li>
		<li><a href="../displaytv.php"><span class="icon-chevron-right"></span>TV</a></li>
		<li><a href="../displaydienlanh.php"><span class="icon-chevron-right"></span>Điện lạnh</a></li>
		<li><a href="../displaykhac.php"><span class="icon-chevron-right"></span>Khác </a></li>
		
		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="giodo.php"><strong>Giỏ đồ<span class="badge badge-warning pull-right" style="line-height:18px;">Đang cập nhập</span></strong></a></li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>Giảm giá 50%</h2>
				  <p> 
					 khi mua online <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="../assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			



			
			

	</div>







<!-- Trang tin tuc -->



	<div class="span9">
	









<!--   Sản phẩm    -->





	<div class="well well-small">
	<h3>Sản phẩm</h3>

	<hr class="soften"/>
	
		<div class="row-fluid">
		<div id="newProductCar" class="carousel slide">
            <div class="carousel-inner">
			<div class="item active">
			  
			  </div>
			 
		   </div>
		  <a class="left carousel-control" href="#newProductCar" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#newProductCar" data-slide="next">&rsaquo;</a>
		  </div>
		  </div>



























		<div class="row-fluid">




		  <ul class="thumbnails">




          










<?php
require 'config.php';
if (isset($_REQUEST['ok'])) {
    $search = addslashes($_GET['search']);

$query=mysqli_query($conn,"select * from sanpham where tensanpham like '%$search%'");
while($row=mysqli_fetch_array($query)){
?>

			<li>
			  <div style="width:128px" style="height:128p">
				<a class="zoomTool" href="giodo.php" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href="chitiet.php?id=<?php echo $row['idsanpham']; ?>"><img style="width:128px" style="height:128p" src="../admin/photo/<?php echo $row['anhsanpham']; ?>" alt="" ></a>
				<div style="width:128px" style="height:128p" >
					<p><?php echo $row['tensanpham']; ?></p>
					<p><strong><?php echo $row['giasanpham']; ?> Vnđ </strong></p>
					<h4><a class="shopBtn" href="#" title="add to cart"> Add to cart </a></h4>
				</div>
			  </div>
			</li>	
			
			<?php
}}
?>


		  </ul>




		</div>
	</div>























<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Link</h5>
<a href="#">......</a><br>
<a href="#">......</a><br>
<a href="#">......</a><br>
<a href="#">......</a><br>
<a href="#">......</a><br>
 </div>
<div class="span2">
<h5>Information</h5>
<a href="contact.html">......</a><br>
<a href="#">......</a><br>
<a href="#">......</a><br>
<a href="#">......</a><br>
<a href="#">......</a><br>
 </div>
<div class="span2">
<h5>Supper</h5>
<a href="#">......</a> <br>
<a href="#">......</a><br>
<a href="#">......</a><br>
<a href="#">......</a><br>
<a href="#">......</a> <br/>
 </div>
 <div class="span6">
<h5>Cảm ơn các quý khác</h5>
	Sự ủng hộ của các bạn là động lực để chúng tôi phát triển cố gắng hơn mỗi ngày
	Một lần nữa cảm ơn tất cả mọi người
 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="../assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="../assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="../assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="../assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="../assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2021<br> Nam Dinh Team Plus </span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/jquery.easing-1.3.min.js"></script>
    <script src="../assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="../assets/js/shop.js"></script>
  </body>
</html>