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
<title>Vatpournima</title>
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
                        <b>VATPOURNIMA</b>
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
                <center><img src="../images/vatt.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center> <h1>Vatpournima</h1></center>
					<p>
						Vat Purnima or pournima chavan or Wat Purnima, also called Vat Savitri is a celebration 
						observed by married women in the Western Indian states of Gujarat,
                        Maharashtra, Goa and some regions of eastern Uttar Pradesh. On this Purnima or "full moon"
                        during the three days of the month of Jyeshtha in the Hindu calendar (which falls in May-June in the Gregorian calendar) 
                        a married woman marks her love for her husband by tying a ceremonial thread around a banyan tree. 
                        The celebration is based on the legend of Savitri and Satyavan as narrated in the epic Mahabharata.Vat Purnima in English means 
                        a full moon related to the banyan tree. It was a Hindu festival that was celebrated strictly in the Deccan area of southern India. 
                        However, in recent years it is observed by married women in the Western Indian states of Gujarat, Maharashtra, Goa too. 
                       Karnataka and also in some regions of Eastern Uttar Pradesh. The period of the festival 
                       is observed over three days, usually the 13th, 14th and 15th days in the month of Jestha (May–June).
					   Women observe a fast and tie threads around a banyan tree and pray for the well-being of their husbands.
					   Take seven rounds around the tree,reads vrat katha of Vat Purnima.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Basket:</b>Mangoes,white thread bundle,loose wheat or rice </li>
					<li><b class="propertyname">Rangoli:</b>White and Color Powders</li>
                    <li><b class="propertyname">Pooja Thali:</b>Oil,Cotton Wicks, Match Box,kapur,incense sticks,
					                            akshat,flowers,kalash with water</li>
					
					
					
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