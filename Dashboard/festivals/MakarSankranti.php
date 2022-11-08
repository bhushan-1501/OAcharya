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
<title>MakarSankranti</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
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
			<a href="../index.php" class="navbar-brand brand"> OACHARYA </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="../index.php">Home</a></li>
				<li class="propClone"><a href="../mybookings.php">MyBookings</a></li>
				<li class="propClone"><a><?php 
				
					echo "welcome, " .$_SESSION['name'];
				?>
				</a></li>
				<li class="propClone"><a href="../logout.php">logout</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
                        <b>MAKAR SANKRANTI</b>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="row">
		<div class="col-md-8">
			<div class="productbox">
                <center><img src="../images/ms2.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center> <h1>Makar Sankranti</h1></center>
					<p>
						Makar Sankranti is when the Sun transits from Dhanu (Sagittarius) to Makar (Capricorn). It is one of the most significant days in the Hindu Solar calendar as it marks the Sun's northward movement (a period called Uttarayana). Moreover, as per traditional beliefs, it is also a day that channelises your life energies in the right direction.<br>The way the Sun's warmth gives relief to people from the harsh cold weather; similarly, Makar Sankranti brings about a change, that can turn the tide. People mainly worship Surya Bhagwan (the Sun God), but they also pay obeisance to other deities such as Lord Ganesha, Lord Shiva, Lord Vishnu and Goddess Lakshmi. Devotees may even worship any other deity.<br>Thus, by performing a simple puja, a person can seek Gods and Goddess's blessings and pray for a bright future.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Toran:</b>Mango leaves, Marigold Flowers</li>
					<li><b class="propertyname">Rangoli:</b>White and Color Powders</li>
					<li><b class="propertyname">Chowki(platform):</b>Wooden platform, Yellow Colored Cloth</li>
                    <li><b class="propertyname">Lamp:</b>Oil,Cotton Wicks, Match Box</li>
					<li><b class="propertyname">Offerings</b>Kalash with Water,Durva grass, Bel Patra, Tulsi, Lotus</li>
					<li><b class="propertyname">Puja:</b>Flowers, Incense sticks, Natural Perfume(Gandham), Raw Rice, Turmeric, Kumkum, Kalava, Roli, Janeu, Camphor(Kapur)</li>
					<li><b class="propertyname">Naivedhya(Prasad):</b>Water, Five Different types of Fruits, any sweets</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>

<!-- CALL TO ACTION =============================-->
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
<script src="../js/jquery-.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/anim.js"></script>

</body>
</html>