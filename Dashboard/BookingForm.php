<?php
session_start();
include_once('../includes/config.php');
if(empty($_SESSION["id"]))
{
    echo "<script language='javascript'>
    alert('Please login first ...');
    document.location='../index.html';
    </script>";
}

$id=$_SESSION["id"];
if($id=="Guest")
{
	echo "<script>
		alert('Please Login with Real id');
		document.location='index.php';
		</script>";	
	
}
else{
	$sql = "SELECT * FROM customers where customer_id='$id'";
	if($result = mysqli_query($con, $sql))
	{
		if(mysqli_num_rows($result) > 0)
		{
			$row = mysqli_fetch_array($result);
			$name=$row['fullname'];
			$phone=$row['phone'];
			$email=$row['email'];
		}
}
}


if(isset($_POST['submit']))
{
	$customer_id= $id;
	$customer_name= $name;
	$customer_email= $email;
	$customer_phone= $phone;


	$pandit_id=$_POST['pandit_id'];
	$sql1 = "SELECT * FROM pandits where pandit_id='$pandit_id'";
	if($result1 = mysqli_query($con, $sql1))
	{
		if(mysqli_num_rows($result1) > 0)
		{
			$row1 = mysqli_fetch_array($result1);
			$pandit_name=$row1['fullname'];
			$pandit_email=$row1['email'];
		}
	}

	$pooja=$_GET['festival'];
	$sql10 = "SELECT * FROM festivals where festival_name='$pooja'";
	if($result10 = mysqli_query($con, $sql10))
	{
		if(mysqli_num_rows($result10) > 0)
		{
			$row10 = mysqli_fetch_array($result10);
			$amount=$row10['fees'];
		}
	}

	$Address=$_POST['build'].",".$_POST['land'].",".$_POST['city'].",".$_POST['pin'];
	$date=$_POST['date'];
	$time=$_POST['hr'].":".$_POST['min']." ".$_POST['ap'];
	$callback=$_POST['callback'];

	
	

	$query3=mysqli_query($con,"INSERT INTO panditbooking(customer_id, pandit_id, customer_name,customer_email, customer_phone,pandit_name, pandit_email, pooja, amount, Address, Date, time, callback ) VALUES 
	('$customer_id','$pandit_id','$customer_name','$customer_email','$customer_phone',' $pandit_name','$pandit_email','$pooja','$amount','$Address','$date','$time','$callback')");
	if($query3==TRUE)
	{
		?>
		<script>
			alert("Pandit has been booked successfully");
			window.location.href ="index.php";
		</script>
		
		<?php
	}
	else
	echo "<script>alert('Some error occured , please fill the form again !');</script>";
}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">


</head>
 
<body>

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
				<li class="propClone"><a href="index.php">Home</a></li>
				<li class="propClone"><a href="mybookings.php">MyBookings</a></li>
				<li class="propClone"><a><?php 
				
					echo "welcome, " .$_SESSION['name'];
				?>
				</a></li>
				<li class="propClone"><a href="logout.php">logout</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.1s">
						<b>PANDIT BOOKING FORM</b>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<b>
                        <div class="form-header">
                            <center>
							<h1>BOOK A PANDIT</h1>
                            </center>
						</div>
						<form method ="post">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Name</span>
										<input class="form-control" type="text" placeholder="Enter your name" value="<?php echo $name;?>" disabled>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Email</span>
										<input class="form-control" type="email" placeholder="Enter your email" value="<?php echo $email;?>" disabled>
									</div>
								</div>
							</div>
                            <div class="row">
								<div class="col-sm-6"> 
								<div class="form-group">
									<span class="form-label">Phone</span>
									<input class="form-control" type="tel" placeholder="Enter your phone number"value="<?php echo $phone;?>" disabled>
								</div>
								</div> 
								<div class="col-sm-3"> 
							<div class="form-group">
								<span class="form-label">Pooja's</span>
								<input class="form-control" type="tel"  value="<?php echo $_GET['festival'];?>" disabled>
								</select>
												<span class="select-arrow"></span>
							</div>
                            </div>  
                                <div class="col-sm-3"> 
							<div class="form-group">
								<span class="form-label">Amount</span>
								<?php
								$pooja=$_GET['festival'];
								
								$sql10 = "SELECT * FROM festivals where festival_name='$pooja'";
								
								if($result10 = mysqli_query($con, $sql10))
								{
									if(mysqli_num_rows($result10) > 0)
									{
										
										$row10 = mysqli_fetch_array($result10);
										$amount=$row10['fees'];
									}
								}
								
								?>
								<input class="form-control"  placeholder="Amount"  id="amt"  name="amt" value="<?php echo $amount;?>" disabled>
							</div>
                            </div>
								</div> 
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
							<div class="form-group">
								<span class="form-label">Building Info</span>
								<input class="form-control" type="text" placeholder="Enter Apartment Name" name="build">
							</div>
                                </div>
                             <div class="col-sm-6">   
							<div class="form-group">
								<span class="form-label">Landmark</span>
								<input class="form-control" type="text" placeholder="Enter Landmark" name="land">
							</div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                <span class="form-label">City</span>
								<select class="form-control" onChange="getPandits(this.value);" name="city">
													<option value="none" disabled selected>Select City</option>
													<option value="kalyan">Kalyan</option>
													<option value="dombivali">Dombivali</option>
													<option value="thane">Thane</option>
													</select>
                                </div>    
                            </div>
                                <div class="col-sm-6">
                                <div class="form-group">
                                <span class="form-label">Pin Code</span>
                                    <input class="form-control" type="tel" placeholder="Enter Pin Code" name="pin">
                                </div>    
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-6"> 
							<div class="form-group">
								<span class="form-label">Pandit available in your area</span>
								<select class="form-control" id="pandit_list" name="pandit_id">
													<option value="none" disabled selected>Select pandit</option>
													</select>
												<span class="select-arrow"></span>
							</div>
                            </div> 
                             <div class="col-sm-6"> 
							<div class="form-group">
								<span class="form-label">Preferable call back time</span>
								<select class="form-control" name="callback">
													<option value="none" disabled selected>Call back time</option>
													<option value="9:00 am to 12:00 pm" >9:00 am to 12:00 pm</option>
													<option value="12:00 pm to 4:00 pm">12:00 pm to 4:00 pm</option>
													<option value="4:00 pm to 8:00 pm">4:00 pm to 8:00 pm</option>
													</select>
												<span class="select-arrow"></span>
							</div>
                            </div>    
                            </div>
							<div class="row">
								<div class="col-sm-5">
									<div class="form-group">
                                        <span class="form-label">Preferable Pooja Date</span>
                                		<input class="form-control" type="date" name="date" required>
									</div>
								</div>
								
								<div class="col-sm-7">
									<div class="row">
										<div class="col-sm-4">
											<div class="form-group">
												<span class="form-label">Time</span>
												<select class="form-control" name="hr">
													<option value="none" disabled selected>Hour</option>
													<option>1</option>
													<option>2</option>
													<option>3</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
													<option>9</option>
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
                                                <br>
												<select class="form-control" name="min">
													<option value="none" disabled selected>Min</option>
													<option>05</option>
													<option>10</option>
													<option>15</option>
													<option>20</option>
													<option>25</option>
													<option>30</option>
													<option>35</option>
													<option>40</option>
													<option>45</option>
													<option>50</option>
													<option>55</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
                                                <br>
												<select class="form-control" placeholder="AM/PM" name="ap">
													<option value="none" disabled selected>AM/PM</option>
													<option>AM</option>
													<option>PM</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
                                    </div>
								</div>
							</div>
                            <section>
							<div>
                                   
                               </div>
                            </section>
						
                        </b>
                        </div>
                    <center>
                    <button  class="btn-buynow" name="submit">CLICK TO BOOK NOW</button>
                    </center>
					</form>
                    <hr>
					</div>
				</div>
			</div>
		</div>
	


<footer>
<div class="footer text-center">
<div class="container">
	<div class="row">
		<p class="footernote">
			 Connect with OAcharya
		</p>
	</div>
</div>
</div>
</footer>
<script>
function getPandits(val){
		$.ajax({

			type:"POST",
			url: "getPandits.php",
			data: 'city='+val,
			success: function(data){
				$("#pandit_list").html(data);
			}
		});

	}
	</script>
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>


</body>
</html>