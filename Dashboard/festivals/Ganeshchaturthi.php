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
<title>Ganeshchaturthi</title>
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
                        <b>GANESH CHATURTHI</b>
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
                <center><img src="../images/bappa2.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center> <h1>Ganesh chaturthi</h1></center>
					<p>
						Ganesha Chaturthi is the Hindu festival held on the birthday of the lord Ganesha,son of Shiva and Parvati.
                        The festival is held on shukla chaturthi in the Hindu month of Bhaadrapada and ends on Anant chaturdashi. 
                        Ganesha Chaturthi starts with Vedic hymns,prayers,vrata and hindu texts such as Ganesha Upanishad. 
						This festival starts on the fourth day of Hindu luni-solar calendar month Bhadrapada,
                        which normally falls in the month of August or September. The Ganesha chaturthi ends on the tenth day.<br>
                        
						Celebrations include four rituals-The first one is Pranapratistha,it involves the positioning of the idol
						or deity of Lord Ganesha into the pandals. 
                        This calls for a big celebration.People pray and sing various folk songs while bringing the deity to Pandals. 
                        The second stage is Shodasopachara.It involves praying to the lord and offering him puja.
                        The third stage is Uttarpuja.It involves a ceremony after which the deity can be moved from his position.
                        After this ritual, the idol is moved among the public so that they can take his blessings.
                        The last stage is Ganpati Visarjan. At this stage, the idol is immersed into the river, sea or ocean.
                        He is believed to go back to Lord Shiva and Goddess Parvati after the immersion.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		
             <center>
                <h2><p> GANESH AARTI</p></h2>
            <audio controls>
		  <source src="../audio/Aarti.mp3"
				type="audio/mp3">
            </audio>
            </center>
		
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Chowki:</b>Wooden platform,2 red cloths,decoration,</li>
					<li><b class="propertyname">Rangoli:</b>White and Color Powders</li>
                    <li><b class="propertyname">Akshata:</b>prepared by mixing wet rice, kumkum, sandalwood paste</li>
					<li><b class="propertyname">Toran:</b>Mango leaves, flowers, garland, hibiscus flower, durva</li>
					<li><b class="propertyname">Lamp:</b>Samai,diya, oil or ghee for the lamp and wicks</li>
					<li><b class="propertyname">Pooja Thali:</b>karpur, dhoop, incense sticks, athtar, haldi,
					                            kumkum, sandalwood, bukka, shendur</li>
					<li><b class="propertyname">Offerings:</b>Kalash(filled with water), panchamrita, durva,
					                            Betel leaves, nuts, 5 different fruits,Pedestal,
                        Modakams and Neivadyam</li></ul>
					
					
					
			</div>
            <br>
             <a href="../BookingForm.php?festival=Ganpati Pooja">
            <button  class="btn btn-buynow">CLICK TO BOOK A PANDIT</button>
                </a>
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
                    <b>Ganesh Shlok</b><br><br>

<b>"Om Gam Ganapathaye Namaha"<br>
"Vakratunda Mahakaya Suryakoti Samaprabha, Nirvighnam Kurume Deva Sarvakaryeshu Sarvada"</b><br><br>

<b>"Om Gam Ganapathiye Namo Namah Shree Siddhivinaayaka namo namah Ashta Vinaayaka namo namah
Ganapati Bappa Mauriya"</b><br>

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