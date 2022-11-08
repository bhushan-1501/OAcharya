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
<title>Akshayatritiya</title>
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
                        <b>AKSHAYA TRITIYA</b>
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
                <center><img src="../images/ak.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center> <h1>Akshaya Tritiya</h1></center>
					<p>
						Often touted as ‘Akha Teej’, Akshaya Tritiya is considered as one of the auspicious days in the Hindu calendar. 
                        Celebrated by both Hindus and Jains with great devotion and ardour, the religious occasion marks the birth of Lord Parasurama.
                        In the term Akshaya Tritiya, ‘Akshaya’ stands for eternal, the never diminishing or imperishable whereas, 
					   ‘Tritiya’ refers to the third.
                        In Jainism, the festival pays homage to Rishabhdev – the first Tirthankara who ended his one-year asceticism by drinking sugarcane juice.
                        In Jainism, the festival of Akshaya Tritiya is also called ‘Varsi Tapa’.
                        Every year, the festivity of Akshaya Tritiya is observed on the third day of Shukla Paksha in the Hindu month of Vaisakh (April – May). 
                        The Goddess of food – Annapurna was born on this auspicious day and also Lord Ganesha wrote the 
						Hindu epic Mahabharat on the dictation of Ved Vyas.

					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Requirements:</b> </li>
					<li><b class="propertyname">Chowki:</b>wooden platform,cloth,Ganesh idol, Lakshmi idol, Vishnu idol/frame</li>
					<li><b class="propertyname">Rangoli:</b>White and Color Powders</li>
                    <li><b class="propertyname">Lamp:</b>sandalwood,haldi kumkum,Oil,Cotton Wicks, Match Box,kapur,incense sticks</li>
					<li><b class="propertyname">Offerings:</b>flowers,tulsi leaves,durva,seasame seeds,milk sweets,chana dal</li>
					<li><b class="propertyname">Prasad:</b>prasad made with rice</li>
					
					
			</div>
		</div>
	</div>
</div>
</section>

<!-- CALL TO ACTION =============================-->
<section class="content-block" style="background-color:#00bba7;">
<div class="container text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="item" >
				<h1 class="callactiontitle">
                    <b>Mantra</b><br><br>
Mantras For Lord Ganesh<br><br>
<b>"Om Gam Ganapathaye Namaha"<br>
"Vakratunda Mahakaya Suryakoti Samaprabha, Nirvighnam Kurume Deva Sarvakaryeshu Sarvada"</b><br><br>

Mantras For Maa Lakshmi<br>
<b>"Om Shree Maha Lakshmyai Cha Vidmahe Vishnu Patnayai Cha Dheemahi Tanno Lakshmi Prachodayat Om"</b><br><br>

Mantras For Lord Vishnu<br>
<b>"Om namo Bhagavathe Vasudevaya, Om namo Narayana, Om namo Shri Srinivasaya, Om namo Venkatesaya"</b><br><br>
<br>



				</h1>
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