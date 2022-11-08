<?php
session_start();
if($_SESSION['name']==null)
{
	echo "<script> alert('Unauthorized access detected .. please login first ....');</script>";
	echo "<script>document.location='../../Customers/login.php';</script>";	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>SatyaNarayan</title>
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
						<b>SATYANARAYANA</b>
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
                <center><img src="../images/Satya2.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center><h1>Satyanarayan</h1></center>
					<p>
						This puja is first mentioned in Skanda Purana, Reva Kanda by Suta Puranik to the rishis in Naimisharanya. The details are part of the Katha (Story) that is usually read during the ritual. <br>A painting of Narayana (Viṣṇu) seated on lotus
Sri Satya Narayana puja is a very popular ritual in most parts of India including Gujarat, Maharashtra, Rajasthan, Uttar Pradesh, Assam, Bengal, Karnataka, Andhra Pradesh, Telangana, Bihar, Odisha, Manipur.<br>The ritual is usually performed on the Full moon day of every month, Ekadashi (11th day after the full moon or new moon), Kārtika Pūrṇimā, Vaiśākhā Pūrṇimā, solar eclipse day or on Saṅkrānti except during Āṣāḍha Chandra Masa.<br>These occasions could include marriage, graduation, the start of a new job, purchase of a new home, to name a few. In addition, the performance of this most auspicious puja generally confers a child to couples trying to start a family.<br>The Legeng is that the instructions given by rishi Narada Muni while on a tour of earth he noticed tremendous amounts of sufferings all around due to malnutrition. He went to lord Vishnu and described the situation and was told with instructions to perform Pooja and the other stories to be narrated.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
            <center>
                <h2><p> SATYANARAYANA POOJA</p></h2>
            <audio controls>
		<source src="../audio/SatyaNarayana.m4a"
				type="audio/mp3">
            </audio>
            </center>
			

			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Prasad:</b>Panchamrit(Milk, Yogurt, Honey,Sugar, Ghee, Coconut)</li>
                    <li><b class="propertyname">Aarti Plate:</b>Kumkum, Haldi, Saffron, Kalava, Pan leaves, Whole Supari(Betel nut)</li>
					<li><b class="propertyname">Offerings:</b>Ghee, Rice, Agarbatti, Dry Fruit, Fresh Fruits, Flowers, Green Cardamoms, Cloves, Mishri</li>
                    <li><b class="propertyname">Utensils:</b>Thalis, Steel Glass, Katri(Bowls), Spoons, Lota(Kalash),Aluminum Foil, Aluminum Tray </li>
					<li><b class="propertyname">Paper Products</b>Bowls, Towels, Napkins, Cups, Lunch Bags.</li>
				</ul>
			</div>
            <br>
             <a href="../BookingForm.php?festival=Satya Narayan">
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
                    <b>LYRICS</b><br><br>
जय लक्ष्मी रमणा स्वामी श्री लक्ष्मी रमणा सत्यनारायण स्वामी सत्यनारायण स्वामी जन पातक हरणा ॐ जय लक्ष्मी रमणा रतन <br>  जड़ित सिंहासन अदभुत छवि राजे स्वामी अदभुत छवि राजे नारद करत नीराजन नारद करत नीराजन घंटा वन बाजे ॐ जय <br> लक्ष्मी रमणा प्रकट भए कलिकारण द्विज को दरस दियो स्वामी द्विज को दरस दियो बूढ़ा ब्राह्मण बनकर बूढ़ा ब्राह्मण बनकर <br> कंचन महल कियो ॐ जय लक्ष्मी रमणा दुर्बल भील कुठारी जिन पर कृपा करी स्वामी जिन पर कृपा करी चंद्रचूड़ एक राजा <br> चंद्रचूड़ एक राजा तिनकी विपत्ति हरि ॐ जय लक्ष्मी रमणा वैश्य मनोरथ पायो श्रद्धा तज दीन्ही स्वामी श्रद्धा तज दीन्ही सो <br> फल भाग्यो प्रभुजी सो फल भाग्यो प्रभुजी फिर अस्तुति किन्ही ॐ जय लक्ष्मी रमणा भाव भक्ति के कारण छिन-छिन रूप <br> धरयो स्वामी छिन-छिन रूप धरयो श्रद्धा धारण किनी श्रद्धा धारण किनी तिनके काज सरयो ॐ जय लक्ष्मी रमणा ग्वाल-बाल <br> संग राजा बन में भक्ति करी स्वामी बन में भक्ति करी मनवांछित फल दीन्हो मनवांछित फल दीन्हो दीन दयालु हरि ॐ जय <br> लक्ष्मी रमणा चढत प्रसाद सवायो कदली फल मेवा स्वामी कदली फल मेवा धूप-दीप-तुलसी से धूप-दीप-तुलसी से राजी <br> सत्यदेवा ॐ जय लक्ष्मी रमणा सत्यनारायणजी की आरती जो कोई नर गावै स्वामी जो कोई नर गावै तन मन सुख संपती तन <br> मन सुख संपती मनवांछित फल पावे ॐ जय लक्ष्मी रमणा जय लक्ष्मी रमणा स्वामी श्री लक्ष्मी रमणा सत्यनारायण स्वामी <br> सत्यनारायण स्वामी जन पातक हरणा ॐ जय लक्ष्मी रमणा ॐ जय लक्ष्मी रमणा ॐ जय लक्ष्मी रमणा
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