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
<title>Mundan Ceremony</title>
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
						<b>MUNDAN CEREMONY</b>
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
                <center><img src="../images/mc.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center><h1>Mundan Ceremony</h1></center>
					<p>
                       A mundan or tonsuring is an important ceremony for Hindus. It is also known as chaula or choodakarana. 
					   Mundan is shaving off baby's first hair or the birth hair.Many also believe that a mundan: <br>
					   -rids the baby of his past life's negativity<br>
                       -bestows a long life and a good future<br>
                       -protects the child from the evil eye<br>
                       -cleanses the child's body and soul<br>
                       -helps to keep the baby's head cool, especially in hot summer months<br>
                       -helps relieve headache and pains caused by teething<br>
                       -improves the growth of the baby's hair<br>
					   A havan or homam is performed by a priest. The mother sits with the child in her lap and faces the west of the sacred fire.
					   The priest shaves off a part of the child's hair while chanting sacred hymns. After that, 
					   the barber shaves off the rest of the hair. In some families, the father performs the initial rite instead of the priest.
                       The shaven head is washed with holy water from the Ganga (Gangajal). Then a paste of turmeric and sandalwood is applied. 
					   
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Thali:</b>Pack of Cotton, Gangajal, Inscense sticks, Supari(betel nuts), Oil</li>
					<li><b class="propertyname">Ritual:</b>Haldi-kumkum,betel leaves,betel nuts,banana,
					                            coconut, rice, dry fruits, ghee, saffron, honey ,
												blouse piece, scissors ,kusha , dhaga(coloured thread) </li>
					<li><b class="propertyname">Sweet:</b>	Any sweet dish</li>					

				</ul>
			</div>
               <a href="../BookingForm.php?festival=Mundan Ceremony">
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