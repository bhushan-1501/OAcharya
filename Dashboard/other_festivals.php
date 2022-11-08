<?php
session_start();
if($_SESSION['name']==null)
{
	echo "<script> alert('Unauthorized access detected .. please login first ....');</script>";
	echo "<script>document.location='../Customers/login.php';</script>";	
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>

<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			<a href="index.html" class="navbar-brand brand"> OACHARYA </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="index.php">Home</a></li>
				<li class="propClone"><a href="mybookings.php">MyBookings</a></li>
				<li class="propClone"><a href="PanditBookingForm.php">Book A Pandit</a></li>
				<li class="propClone"><a><?php 
				
					echo "welcome, " .$_SESSION['name'];
				?>
				</a></li>
				<li class="propClone"><a href="logout.php">logout</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.1s">
						 POOJA AND SAMAGRI
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Wedding</h3>
							<p>
								 You can find the Wedding Ceremonies listed in details and also all the Samagri you need to Perform it with the Mangal Asthika.
							</p>
						</div>
						<span class="maxproduct"><img src="images/wedding.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="others/Wedding.php">
						<h1>Wedding</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Namkaran</h3>
							<p>
								 Naming the baby is a very auspicious ritual so lets dig in to see what can we use to celebrate and arrange the ritual.
							</p>
						</div>
						<span class="maxproduct"><img src="images/namkaran.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="others/Namkaran.php">
						<h1>Namkaran</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Satya Narayan</h3>
							<p>
								Satya Narayan is performed on special occasions and during times of achievements, as an offering of gratitude to the Lord. Lets see how to do it!!!
							</p>
						</div>
						<span class="maxproduct"><img src="images/satya.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="others/SatyaNarayan.php">
						<h1>Satya Narayan</h1>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Vastu Shanti</h3>
							<p>
								 Bought a new house?? Want a very calm and nice environment with happiness flowing in the house. Lets see how can we achieve it through Vastu Shanti puja.
							</p>
						</div>
						<span class="maxproduct"><img src="images/vastu.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="others/Vastu%20Shanti.php">
						<h1>Vastu Shanti</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Mundan Ceremony</h3>
							<p>
								 You wanto rid the baby of any negativity from their past life while promoting mental and spiritual development... Lets check in how to perform it...
							</p>
						</div>
						<span class="maxproduct"><img src="images/Mudan.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="others/Mundan%20Ceremony.php">
						<h1>Mundan Ceremony</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Antya Vidhi</h3>
							<p>
								 Want to Perform AntyaVidhi for the deceased person. Check out the Samagri and the Puja you need as help to perform it May the person Rest in Peace!.
							</p>
						</div>
						<span class="maxproduct"><img src="images/Antya.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="others/Antya%20Vidhi.php">
						<h1>Antya Vidhi</h1>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- CALL TO ACTION =============================--

<!-- FOOTER =============================-->
<div class="footer text-center">
<div class="container">
	<div class="row">
		<p class="footernote">
			 Connect with OAcharya
		</p>
	</div>
</div>
</div>

<!-- Load JS here for greater good =============================-->
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
</body>
</html>