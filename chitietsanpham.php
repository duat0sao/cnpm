





<?php
// Kết nối Database
include 'config.php';
$id=$_GET['id'];
$query=mysqli_query($conn,"select * from `sanpham` where idsanpham='$id'");
$row=mysqli_fetch_assoc($query);
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>by Trần Nhật Duật</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet"/>
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
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
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
				<a href="login.php"><span class="icon-user"></span> My Account</a> 
				<a href="khach/giaodiendangky.php"><span class="icon-edit"></span> Đăng ký  </a> 
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
		<img src="assets/img/logo-bootstrap-shoping-cart.png" alt="NamDinhTeamPlus">                         
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
			
			<form action="#" class="navbar-search pull-right">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>






            
			
		  </div>
		</div>
	  </div>
	</div>





<!-- main -->
<!--Section: Block Content-->
<section class="mb-5">

  <div class="row">
    <div class="col-md-6 mb-4 mb-md-0">

      <div id="mdb-lightbox-ui"></div>

      <div class="mdb-lightbox">

        <div class="row product-gallery mx-1">

          
          <div class="col-12">
            <div class="row">
              
              
              
              <div class="col-3">
                <div class="view overlay rounded z-depth-1 gallery-item">
                 <center><img style="width:40%" src="admin/photo/<?php echo $row['anhsanpham']; ?>"
                    class="img-fluid"></center>
                  <div class="mask rgba-white-slight"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div class="col-md-6">
		<center><h2><?php echo $row['tensanpham']; ?></h2></center>
      
      <center><h3><p class="mb-2 text-muted text-uppercase small"><?php echo $row['loaisanpham']; ?></p></h3></center>
      
      <center><p><span class="mr-1"><strong><h3>Giá: <?php echo $row['giasanpham']; ?> Vnđ </h3></strong></span></p></center>
      <p class="pt-1"><?php echo $row['motasanpham']; ?></p>
      
      <hr>
      <div class="table-responsive mb-2">
        <table class="table table-sm table-borderless">
          <tbody>
            
            
          </tbody>
        </table>
      </div>
      <button type="button" ><a href="thanhtoanluon.php">Mua ngay</a></button>
      <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
          class="fas fa-shopping-cart pr-2"></i><a href="giodo.php">Thêm vào giỏ đồ</a></button>
		  <a href="homthu.php">Tôi cần tư vấn thêm</a>
    </div>
  </div>

</section>
<!--Section: Block Content-->



















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
		<a href="#"><img src="assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2021<br> Nam Dinh Team Plus </span>
</div>
</div>
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.easing-1.3.min.js"></script>
    <script src="assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="assets/js/shop.js"></script>
  </body>
</html>
