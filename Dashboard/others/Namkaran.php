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
<title>Namkaran</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="../https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="../https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="../https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
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
			<a href="../index.html" class="navbar-brand brand"> OACHARYA </a>
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
						<b>NAMKARAN</b>
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
		<div class="wow-hr type_short">
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
			<div class="productbox">
                <center><img src="../images/nk.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center><h1>Namkaran</h1></center>
					<p>
                       Namkaranis one of the most important of the 16 Hindu 'samskaras' or rituals that celebrate rites of passage, the different stages in a person's life. 
					   In the Vedic traditional,'Namkaran'(Sanskrit 'nam' = name; 'karan' = create) is the formal naming ceremony performed to select a newborn's name 
					   using traditional methods and following the astrological rules of naming.
					   Namkaran is also called 'Palanarohan' in some traditions, which refers to putting a child into the cradle (Sanskrit 'palana' =
					   cradle; 'arohan' = onboard).the naming ceremony should be held 11 days after birth immediately preceding the 'Sutika' or 'Shuddhikaran' 
					   period when the mother and child are confined to intensive post-partum or post-natal care.<br>
					   
					   The mother and father start the Namkaran ritual with pranayama, prayers, and mantra chanting in the presence of the family priest. 
					   In the absence of the father, the grandfather or uncle can perform the ritual. The priest performs the ritual with prayers to the Gods, 
					   Agni, the god of fire, the elements, and the spirits of the ancestors.
                       Rice grains are spread on a bronze 'thali' or dish and the father writes the chosen name in it using a gold stick while chanting the God's name.
                       Then he whispers the name into the child's right ear, repeating it four times along with a prayer. 
					   There are five general principles of determining what the initial letter of a child's name should be:
                        <br>
                       "Janam Nakshatranam" (by lunar asterism, composed of the birth star of the child, the position of planets at the time and date of birth, and the moon sign);<br>
                       "Masanam" (according to the child's month of birth);<br>
                       "Devatanama" (after the family deity);<br>
                       "Rashinama"(according to the child's Zodiac sign); and<br>
                       "Samsarikanama" (the worldly name), as an exception to all the above.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
             <center>
                <h2><p> NAMKARAN SHLOK</p></h2>
            <audio controls>
		<source src="../audio/Namkaran.mp3"
				type="audio/mp3">
            </audio>
            </center>
            

			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname"> Hawan and Puja Samagri Packet</b></li>
					<li><b class="propertyname"> Lamp:</b>Pack of Cotton, Inscense sticks, Supari(betel nuts), Oil</li>
					<li><b class="propertyname">Ritual:</b>Haldi-kumkum,betel leaves,betel nuts,bananas,
					                            coconut,rice,dry fruits,ghee,buttermilk,saffron,milk,honey</li>
					<li><b class="propertyname">Prasad:</b>	Any sweet dish</li>					

				</ul>
			</div>
              <br>
             <a href="../BookingForm.php?festival=Namkaran">
            <button  class="btn btn-buynow">CLICK TO BOOK A PANDIT</button>
                </a>
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