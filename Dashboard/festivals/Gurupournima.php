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
<title>Gurupournima</title>
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
                        <b>GURU POURNIMA</b>
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
                <center><img src="../images/gp.jpg" alt=""></center>
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
                    <center> <h1>Guru Pournima</h1></center>
					<p>
						'Mata Pitah Guru Daivam', says that the first place is reserved for the mother, second for the father, 
						third for Guru and forth for God. 
                        Thus,teachers have been given a higher place than Gods in Hindu tradition.Guru Purnima or Vyasa Purnima is the day to celebrate 
                        and pay our gratitude to our Gurus. 
                        This Sanskrit word literally translates to ‘the one who frees us of ignorance’. 
                        This full moon day in the month of Ashada is one of the most auspicious days of the year in Hinduism. 
                        It also commemorates the birthday of Ved Vyasa, who is credited to have authored some of the most important Hindu texts of all 
                        times such as the Puranas, Mahabharata and Vedas.
                        Guru Purnima represents the date on which Lord Shiva as the Adi Guru or original guru taught the seven
                        rishis who were the seers of the Vedas.
                        In the Yoga Sutras, Ishvara as Pranava or Om is said to be the Adi Guru of Yoga. 

					</p>
				</div>
			</div>
		</div>
		<div class="col-md-4">
		    <div class="properties-box">
				<ul class="unstyle">
                    <li><b class="propertyname">Materials:</b> </li>
					<li><b class="propertyname">Worship:</b>Tulsi leaves,garland,clean idols with milk and water,flowers</li>
					<li><b class="propertyname">Rangoli:</b>White and Color Powders</li>
                    <li><b class="propertyname">Akshata:</b>prepared by mixing wet rice, kumkum, sandalwood paste</li>
					<li><b class="propertyname">Lamp:</b>oil or ghee for the lamp and wicks</li>
					<li><b class="propertyname">Pooja Thali:</b>karpur, dhoop, incense sticks, haldi,
					                            kumkum, sandalwood</li>
					<li><b class="propertyname">Offerings:</b>Dry fruits, fruits, betel leaves, Kheer,Neivadyam</li>
					
					
					
			</div>
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
                    <b>Guru Shlok</b><br><br>

<b>गुरुर्ब्रह्मा ग्रुरुर्विष्णुः गुरुर्देवो महेश्वरः । गुरुः साक्षात् परं ब्रह्म तस्मै श्री गुरवे नमः ॥<br>
<br><br>

<b>Guru Aarti</b><br>
जय गुरुदेव अमल अविनाशी, ज्ञानरूप अन्तर के वासी,
पग पग पर देते प्रकाश, जैसे किरणें दिनकर कीं।
आरती करूं गुरुवर की॥<br>

जब से शरण तुम्हारी आए, अमृत से मीठे फल पाए,
शरण तुम्हारी क्या है छाया, कल्पवृक्ष तरुवर की।
आरती करूं गुरुवर की॥<br>

ब्रह्मज्ञान के पूर्ण प्रकाशक, योगज्ञान के अटल प्रवर्तक।
जय गुरु चरण-सरोज मिटा दी, व्यथा हमारे उर की।
आरती करूं गुरुवर की।<br>

अंधकार से हमें निकाला, दिखलाया है अमर उजाला,
कब से जाने छान रहे थे, खाक सुनो दर-दर की।
आरती करूं गुरुवर की॥<br>

संशय मिटा विवेक कराया, भवसागर से पार लंघाया,
अमर प्रदीप जलाकर कर दी, निशा दूर इस तन की।
आरती करूं गुरुवर की॥<br>

भेदों बीच अभेद बताया, आवागमन विमुक्त कराया,
धन्य हुए हम पाकर धारा, ब्रह्मज्ञान निर्झर की।
आरती करूं गुरुवर की॥<br>

करो कृपा सद्गुरु जग-तारन, सत्पथ-दर्शक भ्रांति-निवारण,
जय हो नित्य ज्योति दिखलाने वाले लीलाधर की।
आरती करूं गुरुवर की॥<br>

आरती करूं सद्गुरु की
प्यारे गुरुवर की आरती, आरती करूं गुरुवर की।<br>

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