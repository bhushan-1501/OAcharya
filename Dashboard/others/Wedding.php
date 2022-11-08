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
<title>Wedding</title>
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
						<b>MANGALASTAKA</b>
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
                <center><img src="../images/Mangal.jpeg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center><h1>Mangalastaka</h1></center>
					<p>
						In Hindu Maharashtrians Weddings after all the fire rituals are performed,"Saat Feras" (7 rounds the fire-God) are taken by the couple.<br> Later on "Mangalastakas" are chanted to complete the wedding rituals and the bride and groom wear garlands to each other.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
             <center>
                <h2><p> MANGALASHTIKA</p></h2>
            <audio controls>
		  <source src="../audio/Mangalashtika.mp3"
				type="audio/mp3">
            </audio>
            </center>
		

			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname"> Hawan and Puja Samagri Packet</b></li>
					<li><b class="propertyname"> Samai:</b>Pack of Cotton, Inscense sticks, Supari(betel nuts), Oil</li>
					<li><b class="propertyname">Prasad:</b>Milk, Ghee, Yoghurt, Sugar, Honey</li>
                    <li><b class="propertyname">Sacrifice:</b>Flowers, Rice, Prasad(sweets)</li>
					<li><b class="propertyname">Ritual:</b>Betel Leaves, Coconut, Aluminium Foil, Red Cloth, Picture/Idol of God</li>
					<li><b class="propertyname">Utensils:</b>Plates, Bowls, Spoon, Lota, Glass</li>
					<li><b class="propertyname">Others:</b>Garlands, One Red and one Yellow coloured Chunni, Mangal Sutra, Silver Coin, Sindoor, Puffed Rice</li>
				</ul>
			</div>
            <br>
             <a href="../BookingForm.php?festival=Wedding Ceremony">
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
स्वस्ति श्री गणनायकं गजमुखम, मोरेश्वरम सिद्धीधम ।<br>
बल्लाळो मुरुडम विनायकमहम चिन्तामणि स्थेवरम।<br>
लेण्याद्री गिरीजात्मकम सुरवरदम विघ्नेश्वरम् ओझरम ।<br>
ग्रामो रांजण संस्थीतम गणपति।<br>
कुर्या सदा मंगलम शुभ मंगल सावधान।।१।।<br><br>

गंगा सिंधु सरस्वतीच यमुना,गोदावरी नर्मदा ।<br>
कावेरी शरयू महेंद्रतनया शर्मण्वति वेदीका ।<br>
शिप्रा वेञवती महासूर नदी,ख्याता गया गंडकी।<br>
पुर्णा पुर्ण जलै, समुद्र सरीता।<br>
कुर्या सदा मंगलम शुभ मंगल सावधान।।२।।<br><br>

लक्ष्मी कैस्तुभ परिजातक सुरा धन्वंतरीश्वचंद्रमा।<br>
गाव कामदुधा सरेश्वर गजो, रंभादिदेवांगना ।<br>
अश्क सप्त मखो विषम हरिधनु शंखो मृतम चांबुधे ।<br>
रत्नानीह चतुर्दश प्रतिदिनम,कुर्वतु वो मंगलम।<br>
कुर्या सदा मंगलम शुभ मंगल सावधान।।३।।<br><br>

रामो राजमणी सदा विजयते रामम्।<br>
रमेशम भजे रामेणाभिहता निशाचरचमु।<br>
रामाय तस्मै नमः।<br>
रामान्नस्ति परायणम् परतम् रामस्य दासोराम्यहम् ।<br>
रामे चित्तलय सद भवतु मे भी राम मामुघ्दर।<br>
कुर्या सदा मंगलम शुभ मंगल सावधान।।४।।<br><br>

राणा भिमक रुक्मीणीस नयनी, देखोनी चिंता करी ।<br>
हि कन्या सगुणा वरा नृपवरा, कवणासी म्या दिईजे।<br>
आता एक विचार कृष्ण नवरा ,त्यासी समर्पु म्हणे।<br>
रुख्मी पुञ वडील त्यासी पुसणे ।<br>
कुर्या सदा मंगलम शुभ मंगल सावधान।।५।।<br><br>

लाभो संतती संपदा बहु तुम्हा,लाभोतही सद्रुण ।<br>
साधोनि स्थिर कर्मयोग अपुल्या, व्हा बांधवा भूषण।<br>
सारे राष्ट्रधुरिण हेचि कथिती किर्ति करा उज्वल।<br>
गा ग्रहास्याश्रम हा तुम्हा वधूवरा देवो सदा मंगलम् ।<br>
कुर्या सदा मंगलम शुभ मंगल सावधान।।६।।<br><br>

विष्णूला फमला शिवसी गिरीजा, कृष्णा जशी रुक्मिणी।<br>
सिंधुला सरिता तरुसि लतिका,चंद्रा जशी रोहिणी ।<br>
रामासी जनकात्मजा प्रिया जशी, सवित्री सत्यवरता ।<br>
तैशि ही वधु सजिरी वरीतसे, हर्ष वरासी आता।<br>
कुर्या सदा मंगलम शुभ मंगल सावधान।।७।।<br><br>

आली लग्न घडी समीप नवरा घेऊनि यावा घरा।<br>
गृहतके मधुपर्क पुजन करा अन्त पाटते धरा।<br>
दृष्टादृष्ट वद्य वरा न करिता , दोघे करावी उभी।<br>
वाजंञे बहु गलबला न करणे, लक्ष्मीपते मंगलम।<br>
कुर्या सदा मंगलम शुछ मंगल सावधान।।८।।
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