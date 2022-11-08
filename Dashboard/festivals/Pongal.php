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
<title>Pongal</title>
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
			<a href="index.php" class="navbar-brand brand"> OACHARYA </a>
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
                        <b>PONGAL</b>
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
                <center><img src="../images/pongal2.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                     <center> <h1>Pongal</h1></center>
					<p>
						Pongal is a multi-day Hindu harvest festival of South India, particularly in the Tamil community.It is observed at the start of the month Tai according to Tamil solar calendar.It is dedicated to the Hindu sun god, the Surya, and corresponds to Makar Sankranti, the harvest festival under many regional names celebrated throughout India.<br>The three days of the Pongal festival are called Bhogi Pongal, Surya Pongal and Maattu Pongal.Some Tamils celebrate a fourth day of Pongal as Kanum Pongal.The festival is named after the ceremonial "Pongal", which means "to boil, overflow" and refers to the traditional dish prepared from the new harvest of rice boiled in milk with jaggery (raw sugar).To mark the festival, the pongal sweet dish is prepared, first offered to the gods and goddesses (goddess Pongal), followed sometimes with an offering to cows, and then shared by the family.Festive celebrations include decorating cows and their horns, ritual bathing and processions.

					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname"> Day1 Bhogi Pongal:</b>Fruits of harvest(regi pallu), Sugarcane, Flowers of season</li>
					<li><b class="propertyname">Day2 Surya/Perum Pongal:</b>Open pot for Dish, Turmeric plant and Flower garland for Decoration, Sugarcane Stalks, Banana, Mango Leaves</li>
					<li><b class="propertyname">Day3 Mattu Pongal:</b>Turmeric water, Oil, Shikakai, Kumkum, Jagerry, Honey, Banana, Fruits</li>
                    <li><b class="propertyname">Day4: Kanum Pongal:</b>Turmeric Plant Leaf</li>
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