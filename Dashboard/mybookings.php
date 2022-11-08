<?php
session_start();
include_once('../includes/config.php');

$id=$_SESSION["id"];
if($id=="Guest")
{
	echo "<script>
		alert('Please Login with Real id');
		document.location='index.php';
		</script>";	
	
}
if(empty($_SESSION["id"]))
{
    echo "<script language='javascript'>
    alert('Please login first ...');
    document.location='../index.html';
    </script>";
}



?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">

<style>
#p1
{
	width:100px;
}
</style>
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
				<li class="propClone"><a href="PanditBookingForm.php">Book A Pandit</a></li>
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
						<b>My Bookings</b>
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
                            <br>
							<h1>Bookings Table</h1>
                            <br>
                            </center>
						</div>

                    
						
<div class="w3-container">

<table class="w3-table-all w3-card-4">
  <tr>
    <th>Booking Id</th>
    <th>Name of Pooja</th>
    <th>Pandit's name</th>
    <th>Pandit's Email</th>
    <th>Amount</th>
    <th>Date</th>
    <th>Time</th>
  </tr>
  <?php
    $id=$_SESSION["id"];
    $sql = "SELECT * FROM panditbooking where customer_id=$id";
    if($result = mysqli_query($con, $sql))
    {
        if(mysqli_num_rows($result) > 0)
        {
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                    echo "<td>" . $row['booking_id'] . "</td>";
                    echo "<td>" . $row['pooja'] . "</td>";
                    echo "<td>" . $row['pandit_name'] . "</td>";
                    echo "<td>" . $row['pandit_email'] . "</td>";
                   
                    echo "<td>" . $row['amount'] . "</td>";
                    echo "<td>" . $row['Date'] . "</td>";
                    echo "<td>" . $row['time'] . "</td>";
                   
                echo "</tr>";
            }
        }
    }
    ?>
  
</table>
</div>

                        
                        
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


<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>


</body>
</html>