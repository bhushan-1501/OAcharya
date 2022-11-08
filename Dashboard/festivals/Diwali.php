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
<title>Diwali</title>
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
                        <b>DIWALI</b>
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
                <center><img src="../images/diwali1.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center> <h1>Diwali</h1></center>
					<p>
					    Diwali, Deepavali is a five day-long (varying as per Hindu Calendar) festival of lights,
                        which is celebrated by Hindus, Jains, Sikhs and some Buddhists every autumn in the northern hemisphere (spring in southern 
                        hemisphere). One of the most popular festivals of Hinduism, Diwali symbolises the spiritual "victory of light over 
                        darkness, good over evil and knowledge over ignorance."
                        In the Gregorian calendar, the festival generally falls between mid-October and mid-November.
                        The reason everything is about lights is because of the legend of Prince Rama after defeating the demon Ravana. 
                        Also,The queen of the festivities is Lakshmí, wife of the god Vishnú, goddess who symbolizes good luck and beauty 
						and who grants prosperity and wealth.<br>
						Day 1. Vasu Baras: On the first day of celebration, cows and calves, sacred animals in the country, are worshiped and all homes are carefully cleaned.
                        <br>
                        Day 2. Dhan Teras: The second day of Diwali celebrates the birth of God Dhanvantri. It is the most profitable and prosperous for business. 
						This is when candles and lamps are placed throughout the houses.
                        <br>
                        Day 3. Kali Chaudas or Chaturdashi: The third day is the most important day of the festival. 
						The day when the light overcame the darkness. It is the day Lord Krishna killed the demon Narakasura. 
						In South India, it is the most celebrated day. The gods are prayed to for happiness and prosperity.
						<br>
						Day 4. Diwali/ Deepawali or Lakshmi Puja: It is the most important day of the Diwali,the fourth day is the first of the new Hindu year. 
						Prayers are offered to Goddess Lakshmi wife of the god Vishnú, whose image represents beauty and brings good luck, prosperity and wealth and Lord Ganesh.<br>
						Day 5. Govardhan Puja/Padwa: It is the day that Krishna defeated Indra. He killed the latter and released the maidens he was holding. It is common for husbands to give special gifts
						to their wives and brothers to strengthen their bonds.<br>

                        The next day, Bhaiduj/Bhaubeej, brothers and sisters from all over India express their affection.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		 <center>
                <h2><p> Laxmi Pooja</p></h2>
            <audio controls>
		  <source src="../audio/Maa Lakshmi aarti.mpeg"
				type="audio/mp3">
            </audio>
            </center>
		
		    <div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Worship:</b>Tulsi leaves,garland,clean idols of Maa Lakshmi and 
					                            Lord Ganesh with milk and water,flowers</li>
					<li><b class="propertyname">Rangoli:</b>White and Color Powders</li>
					<li><b class="propertyname">Toran:</b>Mango leaves,marigold flowers,garland</li>
					<li><b class="propertyname">Chowki:</b>Wooden platform,yellow or red cloth,
					                           kalash with water,coconut,betel leaves,cash,silver coins,broom</li>
                    <li><b class="propertyname">Akshata:</b>prepared by mixing wet rice, kumkum, sandalwood paste</li>
					<li><b class="propertyname">Lamp:</b>oil or ghee for the lamp and wicks,samai</li>
					<li><b class="propertyname">Pooja Thali:</b>karpur, dhoop,incense sticks,haldi-kumkum,
					                            sandalwood,atthar,ganti,taal</li>
					<li><b class="propertyname">Offerings:</b>Flowers-lotus for Lakshmi,durva,Dry fruits, fruits,
                        betel leaves, Kheer,farhal,Neivadyam</li></ul>
					
					
					
			</div>
            <br>
             <a href="../BookingForm.php?festival=Laxmi Poojan">
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
                    <b>Maa Lakshmi Shlok</b><br><br>

<b>या देवी सर्वभूतेषु लक्ष्मी रूपेण संस्थिता, नमस्त्यै नमस्त्यै ..नमस्त्यै नमस्त्यै नमस्त्यै नमों नम:। </b><br>
<b>जय देवी जय देवी जय महालक्ष्मी।
वससी व्यापकरुपे तू स्थूलसूक्ष्मी॥</b><br>
<b>ॐ आद्यलक्ष्म्यै नम:, ॐ विद्यालक्ष्म्यै नम:, ॐ सौभाग्यलक्ष्म्यै नम:, ॐ अमृतलक्ष्म्यै नम:, ॐ कामलक्ष्म्यै नम:, 
ॐ सत्यलक्ष्म्यै नम:, ॐ भोगलक्ष्म्यै नम:, ॐ योगलक्ष्म्यै नम:।। </b><br>

<b>ॐ श्रीं ह्रीं श्रीं कमले कमलालये प्रसीद प्रसीद श्रीं ह्रीं श्रीं महालक्ष्म्यै नमः।।</b><br>


<br><br>
<b>Maa Lakshmi Aarti</b><br>
ॐ जय लक्ष्मी माता, मैया जय लक्ष्मी माता

तुमको निशदिन सेवत, मैया जी को निशदिन * सेवत हरि विष्णु विधाता

ॐ जय लक्ष्मी माता-2 <br>

उमा, रमा, ब्रह्माणी, तुम ही जग-माता

सूर्य-चन्द्रमा ध्यावत, नारद ऋषि गाता

ॐ जय लक्ष्मी माता-2 <br>

दुर्गा रूप निरंजनी, सुख सम्पत्ति दाता

जो कोई तुमको ध्यावत, ऋद्धि-सिद्धि धन पाता

ॐ जय लक्ष्मी माता-2 <br>

तुम पाताल-निवासिनि, तुम ही शुभदाता

कर्म-प्रभाव-प्रकाशिनी, भवनिधि की त्राता

ॐ जय लक्ष्मी माता-2 <br>

जिस घर में तुम रहतीं, सब सद्गुण आता

सब सम्भव हो जाता, मन नहीं घबराता

ॐ जय लक्ष्मी माता-2 <br>

तुम बिन यज्ञ न होते, वस्त्र न कोई पाता

खान-पान का वैभव, सब तुमसे आता

ॐ जय लक्ष्मी माता-2 <br>

शुभ-गुण मन्दिर सुन्दर, क्षीरोदधि-जाता

रत्न चतुर्दश तुम बिन, कोई नहीं पाता

ॐ जय लक्ष्मी माता-2 <br>

महालक्ष्मीजी की आरती, जो कोई नर गाता

उर आनन्द समाता, पाप उतर जाता

ॐ जय लक्ष्मी माता-2 <br>

ॐ जय लक्ष्मी माता, मैया जय लक्ष्मी माता

तुमको निशदिन सेवत,

मैया जी को निशदिन सेवत हरि विष्णु विधाता

ॐ जय लक्ष्मी माता-2 <br>


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