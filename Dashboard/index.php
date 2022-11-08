<?php
session_start();
if(empty($_SESSION["id"]))
{
    echo "<script language='javascript'>
    alert('Please login first ...');
    document.location='../index.html';
    </script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body class"bg">


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
			<a href="index.php" class="navbar-brand brand"> OACHARYA </a>
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
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter top over 2.5s after 0.1s">
						 KNOW ABOUT YOUR FESTIVALS
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>


<!--First Section ==================================================================-->
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
							<a href="festivals/MakarSankranti.html"><h3>Makar Sankranti</h3></a>
							<p>
								 Makara Sankranti falls in the Hindu calendar solar month of Makara, and the lunar month of Magha which falls in 14th/15th January of the Gregorian Calender.
							</p>
						</div>
						<span class="maxproduct"><img src="images/product1-1.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/MakarSankranti.php">
						<h1>Makar Sankranti</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Pongal</h3>
							<p>
								  Pongal is observed at the start of the month Tai according to Tamil solar calendar, and this is typically about January 14.
							</p>
						</div>
						<span class="maxproduct"><img src="images/pongal.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Pongal.php">
						<h1>Pongal</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Lohri</h3>
							<p>
								 Lohri falls in the month of Paush and is set by the solar part of the lunisolar Punjabi calendar and in most years it falls around 13 January of the Gregorian calendar.
							</p>
						</div>
						<span class="maxproduct"><img src="images/lohri1.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Lohri.php">
						<h1>Lohri</h1>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- Second Section=================================================================-->
<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				
			</div>
			<div class="wow-hr type_short">
				
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Holi</h3>
							<p>
								 Starting on the evening of the Purnima falling in the Hindu calendar month of Phalguna, which falls around middle of March in the Gregorian calendar.
							</p>
						</div>
						<span class="maxproduct"><img src="images/holi.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Holi.php">
						<h1>Holi</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Gudi Padwa</h3>
							<p>
								It is celebrated in the first day of the Chaitra month of Hindu Calender and also in the mid of the April according to the Gregorian Calender.
							</p>
						</div>
						<span class="maxproduct"><img src="images/gd.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Gudipadwa.php">
						<h1>Gudi Padwa</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Akshaya Tritiya</h3>
							<p>
								Akshaya Tritiya falls during Shukla Paksha Tritiya in the month of Vaishakha. This year, the festival falls on Friday, May 14, 2021.
							</p>
						</div>
						<span class="maxproduct"><img src="images/akshay.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/AkshayaTritiya.php">
						<h1>Akshaya Tritiya</h1>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!Third section========================================================-->
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
							<h3>Vat Purnima</h3>
							<p>
								 Vat Purnima falls in the month between May-July and varies according to the Purnima(Full Moon) that falls in the month of Jyeshtha of Hindu Calender
							</p>
						</div>
						<span class="maxproduct"><img src="images/vp.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Vatpournima.php">
						<h1>Vat Pournima</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Onam</h3>
							<p>
								 The date is based on the Panchangam and falls on the 22nd nakshatra Thiruvonam in the month Chingam of Malayalam calendar, which in Gregorian calendar falls on August–September.
							</p>
						</div>
						<span class="maxproduct"><img src="images/onam.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Onam.php">
						<h1>Onam</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Raksha Bandhan</h3>
							<p>
								 Last day of Shraavna month of Hindu Calender is celebrated as raksha bandhan. It falls in the Month of August according to the Gregorian Calender.
							</p>
						</div>
						<span class="maxproduct"><img src="images/rakhi.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Rakshabandhan.php">
						<h1>Raksha Bandhan</h1>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    
<!-- Fourth Section=================================================================-->
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
							<h3>Ganesh Chathurti</h3>
							<p>
								 In the Gregorian calendar, Ganesh Chaturthi falls between 22 August and 20 September every year. It is observerd on the fourth day of Shukla Paksha in Hundu Calender.
							</p>
						</div>
						<span class="maxproduct"><img src="images/ga.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Ganeshchaturthi.php">
						<h1>Ganesh Chathurti</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Guru Pournima</h3>
							<p>
								 The Guru Purnima is celebrated on the full moon dayy in Ashadh month of hindu calender. It falls at the start of July according to the English Calender.
							</p>
						</div>
						<span class="maxproduct"><img src="images/gp2.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Gurupournima.php">
						<h1>Guru Pournima</h1>
						</a>
					</div>
				</div>
			</div>
			<!-- /.productbox -->
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Diwali</h3>
							<p>
								 Diwali is celebrated on Amavasya(new moon) which is the 15th day of the Kartik Month in Hindu Calender.Also duringthe second half of October or early November in the Gregorian calendar.
							</p>
						</div>
						<span class="maxproduct"><img src="images/diwali.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="festivals/Diwali.php">
						<h1>Diwali</h1>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- BUTTON =============================-->



<!-- AREA =============================-->
<div class="item content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="infoareawrap">
					<h1 class="text-center subtitle">Other Pooja and Holy Events</h1>
					<p>
						 Apart from the all these festivals we also have other events such as Namkaran, Satyanarayan pooja,etc. which requires facilites like ingredients, aarti and much more.
					</p>
<div class="item content">
	<div class="container text-center">
		<a href="other_festivals.php" class="homebrowseitems">Read More
		</a>
	</div>
</div>
<br/>
				</div>
            </div>	
		</div>
	</div>
</div>


<!-- TESTIMONIAL =============================-->


<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				 Connect With OAcharya
			</p>
		</div>
	</div>
</div>

<!-- SCRIPTS =============================-->
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