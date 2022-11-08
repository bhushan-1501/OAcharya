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
	<title>Lohri</title>
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
				<li class="propClone"><a href="index.html">Home</a></li>
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
						 <b>LOHRI</b>
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
	<div class="underlined-title">
		<div class="editContent">
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="productbox">
                <center><img src="../images/lohri2.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center><h1>Lohri</h1></center>
					<p>
						Like most other festivals in India, Lohri is also related to the agricultural activities of the farmers. It marks the harvesting season in Punjab and the end of the winter season. Lohri usually falls on the last day of the month of Paush, a day known as Makar Sankranti in most parts of the country. According to the English calendar, Lohri falls on 13th January every year.<br>Preparation to celebrate Lohri begins way before the actual festival day. Right through the winter days, village women and children collect dry twigs and branches to make a huge bonfire on the day of Lohri-the bigger the better.<br>On the day of the festival, with the setting of the sun, the bonfire is lit with people singing and dancing to the tune of Lohri songs.<br>The munching of seasonal goodies like popcorn, reori, peanuts and sugar cane forms an integral part of the celebration. Fistfuls of these goodies also find their way into the fire, as an offering to the Sun God, the giver of all life.<br>Interestingly, the next day of Lohri is known as Maghi, a day that signifies the beginning of the month of Magh.<br>According to common belief, this is an auspicious day to take holy dip and give away charity. Kheer is prepared in sugar cane juice to mark the day.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Bonfire: </b>Match box, Twigs and Wood</li>
					<li><b class="propertyname">Food:</b>People Cook sarson ka saag, makki ki roti, rau di kheer</li>
					<li><b class="propertyname">Prasad:</b> til (gingelly), moongphali (peanuts), popcorns and chirwa (beaten rice)</li>
                    <li><b class="propertyname"></b></li>
					<li><b class="propertyname"></b></li>
					<li><b class="propertyname"></b></li>
					<li><b class="propertyname"></b></li>
					<li><b class="propertyname"></b></li>
					<li><b class="propertyname"></b></li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>

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