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
<title>Vastu Shanti</title>
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
						<b>VASTU SHANTI</b>
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
                <center><img src="../images/vastu1.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center><h1>Vastu Shanti</h1></center>
					<p>
						 Vastu Shanti Puja is a spiritual and religious process to offer prayers to the Vastu Purush who is the Lord, protector and soul of the house and seek 
						 the blessings for positivity and prosperity. During this worship, people also pay their tribute to the deity of directions, five elements of nature, and natural forces.
					     Vastu Shastra is a conventional Indian system of architecture (precisely translating to “science of architecture”) which helps in attaining happiness, prosperity, mental peace, 
						 and harmony in home and work place. It involves a scientific study of directions with the combination of the five elements of nature (fire, water, earth, and air and space)
						 to create a balance between humans and nature and to pave way for happiness, good health, wealth, and prosperity. 
						 The five elements or the “Paanchbhootas” are utilized by the study of Vaastu Shastra to eliminate the troubles of human beings in homes or offices by changing the interior
						 and exterior structural configurations. 
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
            <center>
                <h2><p> VASTU SHANTI SHLOK</p></h2>
            <audio controls>
		<source src="../audio/Vastu.mpeg"
				type="audio/mp3">
            </audio>
            </center>
            
            <div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Idols:</b> Vastu Purusha idol/photo, Lord Ganesha idol/photo, Kuldevatha photo
                                                Vastu Yantra</li>
					<li><b class="propertyname">Prasad:</b>Panchamrit(Milk, Yogurt, Honey,Sugar, Ghee, Coconut)</li>
                    <li><b class="propertyname">Aarti Plate:</b>Kumkum, Haldi, Saffron, Kalava, Pan leaves, 
					                            dhoop,attar, Supari(Betel nut)</li>
					<li><b class="propertyname">Offerings:</b>Ghee, Rice, Agarbatti, Dry Fruit, Fresh Fruits, Flowers, Green 
					                            Seasame seeds,urad dal,betel leaves, Cardamoms, Cloves, Mishri</li>
                    <li><b class="propertyname">Utensils:</b>Thalis, Steel Glass, Katri(Bowls), Spoons, Lota(Kalash),
					                            Aluminum Foil, Aluminum Tray </li>
					<li><b class="propertyname">Paper Products</b>Bowls, Towels, Napkins, Cups, Lunch Bags.</li>
				</ul>
			</div>
              <br>
             <a href="../BookingForm.php?festival=Vastu Shanti">
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
  
  <br> नमस्ते वास्तु पुरुषाय भूशय्या भिरत प्रभो | मद्गृहं धन धान्यादि समृद्धं कुरु सर्वदा || <br>

Vastu Dosha Nivaran Mantra – 1<br>
ॐ वास्तोष्पते प्रति जानीद्यस्मान स्वावेशो अनमी वो भवान यत्वे महे प्रतितन्नो जुषस्व शन्नो भव द्विपदे शं चतुष्प्दे स्वाहा |<br>

Vastu Dosha Nivaran Mantra – 2<br>
ॐ वास्तोष्पते प्रतरणो न एधि गयस्फानो गोभि रश्वे भिरिदो अजरासस्ते सख्ये स्याम पितेव पुत्रान्प्रतिन्नो जुषस्य शन्नो भव द्विपदे शं चतुष्प्दे स्वाहा |<br>

Vastu Dosha Nivaran Mantra – 3<br>
ॐ वास्तोष्पते शग्मया स र्ठ(ग्वग्) सदाते सक्षीम हिरण्यया गातु मन्धा ।

चहिक्षेम उतयोगे वरन्नो यूयं पातस्वस्तिभिः सदानः स्वाहा ।

अमि वहा वास्तोष्पते विश्वारूपाशया विशन् सखा सुशेव एधिन स्वाहा ।<br>

Vastu Dosha Nivaran Mantra – 4<br>
ॐ वास्तोष्पते ध्रुवास्थूणां सनं सौभ्या नां द्रप्सो भेत्ता पुरां शाश्वती ना मिन्क्षे मुनीनां सखा स्वाहा | <br> <br>

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