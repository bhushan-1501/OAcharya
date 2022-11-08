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
<title>Gudi Padwa</title>
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
                        <b>GUDI PADWA</b>
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
                <center><img src="../images/gudi2.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center> <h1>Gudi Padwa</h1></center>
					<p>
						Gudhi Padwa is a spring-time festival that marks the traditional new year for Marathi and Konkani Hindus.
                        It is celebrated in and near Maharashtra and Goa on the first day of the Chaitra month to mark the beginning of the New year according 
                        to the lunisolar Hindu calendar. The word पाडवा (pāḍavā) or पाडवो (pāḍavo) comes from the Sanskrit word प्रतिपदा (pratipadā), 
						which refers to the first day of a lunar fortnight. The festival is observed with colorful floor decorations called rangoli, 
						a special Gudhi flag (garlanded with flowers, mango and neem leaves, topped with upturned silver or copper vessel), 
						street processions, dancing and festive foods.
                        In India, first day of the bright phase of the moon is called Gudhi Padwa in Marathi.
                        Konkani Hindus variously refer to the day as being a corruption of the word saṁvatsara.
                        Telugu Hindus celebrate the same occasion as Ugadi, while Konkani and Kannada Hindus in Karnataka refer to it as yugādi. 
                        The same new year festival is known by other names in different regions of the Indian subcontinent. 
                        However, this is not the universal new year for all Hindus. 
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Toran:</b>mango leaves,flowers,bunch of neem leaves</li>
					<li><b class="propertyname">Rangoli:</b>White and Color Powders</li>
					<li><b class="propertyname">Chowki:</b>wooden platform,red or yellow cloth</li>
					<li><b class="propertyname">Gudi:</b>Bamboo stick,kalash,new saree/blouse piece/scarf,sugar candies(gathis),
					                            neem leaves,garland</li>
                    <li><b class="propertyname">Pooja thali:</b>Oil,Cotton Wicks,Match Box,kapur,incense sticks,haldi kumkum,dhoop</li>
					<li><b class="propertyname">Neivadya(Prasad)</b>bowl of panna and thali</li>
					
					
					
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