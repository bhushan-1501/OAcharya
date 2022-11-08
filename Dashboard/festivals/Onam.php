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
<title>Onam</title>
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
                        <b>ONAM</b>
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
                <center><img src="../images/onam1.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center> <h1>Onam</h1></center>
					<p>
						Onam is a Hindu festival celebrated by the people of Kerala. It is the most popular festival in the state and 
						is celebrated each year in August and September,
                        and is also a major harvest festival. This year the festival will be celebrated on August 31, with festivities starting on August 22,
						till September 2nds. Onam marks the first month of the Malayalam calendar known as Chingam. 
                        The festival commemorates the appearance of Vamana avatar of Vishnu and the subsequent homecoming of the legendary King Mahabali.
                        The celebrations of Onam start on Atham day (the day when Atham Nakshatra prevails) and continue for 10 days
                        till Thiruvonam day, also the most auspicious day during the festival of Onam. Atham Nakshatra is known as Hasta Nakshatra in other Hindu Calendars.
                        King Mahabali the king of Kerala defeated the Gods and began ruling over all three worlds and it was during 
                        his reign that the local people saw the best of times; 
                        prosperity and grandeur ruled everywhere. To end Mahabali’s rule on earth. The Gods got insecure about King Mahabali’s popularity and
                        asked Lord Vishnu to step in and help contain Mahabali. Lord Vishnu emerged as a Vaman (short Brahmin) and tricked the 
                        King to give him whatever land he had. Thereby, King Mahabali was sent to a lower world; but Vishnu also granted him a wish that 
                        he could visit his land once every year. Onam celebrates this home-coming of the King.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Onam sadya:</b>banana leaf,nine-course meal i.e.Sharkaraveratti,chips,
					                         Injipuli,Thoran,Mezhukkupuratti,Kaalan,Olan,
											 Avial,Sambhar,Rasam,Kichadi,Moru(buttermilk),
											 Payasam </li>
					<li><b class="propertyname">Pookalam:</b>Flowers</li>
                    
					
					
					
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