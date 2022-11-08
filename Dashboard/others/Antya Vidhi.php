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
<title>Antya Vidhi</title>
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
						<b>ANTYA VIDHI</b>
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
                <center><img src="../images/av.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center><h1>Antya Vidhi</h1></center>
					<p>
						A havan or homam is performed by a priest. The mother sits with the child in her lap and faces the west of the sacred fire. 
						The priest shaves off a part of the child's hair while chanting sacred hymns. After that, the barber shaves off the rest of the hair. 
						In some families, the father performs the initial rite instead of the priest.
                        The shaven head is washed with holy water from the Ganga (Gangajal). Then a paste of turmeric and sandalwood is applied. 
						<br>
						Things to Remember Before Conducting the Antyeshti Funeral Ritual
                        New clothes, bed, sheets and mattress should be brought for the deceased.
                        Flowers should be brought for the decoration of the death bed.
                        Materials like barley flour, sesame and rice should be mixed and kept ready for pind daan. If barley flour is not available, then wheat flour should be mixed with barley.
                        Make arrangements for the sacred fire or Agni, either from home or at the cremation ground.
                        Organize the necessary materials required for the aarti like plate, roli, akshat, incense stick and match box.
                        The materials required for hawan like sandalwood, incense sticks, dry basil basil leaves should be kept ready.
                        For the final offering, pour ghee inside a coconut after making a hole in its shell.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
            <center>
                <h2><p>ANTYA VIDHI SHLOK</p></h2>
            <audio controls>
		<source src="../audio/AntyaVidhi.mpeg"
				type="audio/mp3">
            </audio>
            </center>
            
			<div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">List of things:</b>Black seasame seeds,white rice,gangajal,tulsi leaves,
					                             cotton balls, incense sticks, karpur,coconut, matka
												 popcorn, flowers, cloth, wooden blocks, white sheet, garland</li>
                    
				</ul>
			</div>
            <br>
             <a href="../BookingForm.php?festival=Antya Vidhi">
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
                    <b>Mantras</b><br><br>
  
  <br> “ॐ यमाय सोमं नुनुत, यामाय जुहुता हविः।
यमं ह यज्ढो गच्छति, अग्निदूतो अरंकृतः।।” …..ऋ 10.14.13 <br>

“……….नामाऽहं (मृतक का नाम) प्रेतस्य प्रेतत्त्व – निवृत्त्या उत्तम लोक प्राप्त्यर्थं औधर्वदेहिकं करिष्ये।” <br>

“ॐ देवस्य त्वा सवितुः प्रसवेऽश्विनोर्बाहुभ्यां पूष्णो हस्ताभ्याम्‌ ।
सरस्वत्यै वाचो यन्तुर्यनत्रिये, दधामि बहस्पतेष्ट्वा, साम्राज्ये नाभिषिंचाम्यसौ।”<br>

“ॐ इन्द्राय स्वाहा / oṃ indrāya svāhā”|<br>

ॐ पूर्णमदः पूर्णमिदं / oṃ pūrṇamadaḥ pūrṇamidaṃ”<br>
“ॐ आ त्वा मनसाऽनार्तेन, वाचा ब्रह्मणा त्रय्या विद्यया, पृथिव्यामक्षिकायामपा रसेन निवपाम्यसौ।।” ….का. श्रौ. सू. 258.6<br>

“ॐ य़े चित्पूर्व ऋतसाता ऋतजाता ऋतावृधः। ऋषीन्तपस्वतो यम तपोजाँ अपि गच्छतात।। ॐ आयुर्विश्वायुः परिपातु त्वा, पूषा त्वा पातु प्रपथे पुरस्तात्। यत्रासते सुकृतो यत्र तऽईयुः, तत्र त्वा देवः सविता दधातु।।” – अथर्व. 18.2.15.55
<br>
“ॐ ये तीर्थानि प्रचरन्ति, सुकाहस्ता निषंगिणः।
तेषा सहस्रयोजने व धन्वानि तन्मसि।।”….- 16.61

<br><br>

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