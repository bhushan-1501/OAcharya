<?php
include('../includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
	$fullname=$_POST['name'];
	$password=md5($_POST['pass']);
	$phone=$_POST['phone'];
	if(!empty($_POST["email"])) 
	{	
		$email=$_POST['email'];
		$result =mysqli_query($con,"SELECT * FROM customers WHERE email='$email'");
		$count=mysqli_num_rows($result);
		if($count>0)
		{
			
			echo "<script>alert('email already exists')</script>";
			
		} 
		else
		{	
			$query=mysqli_query($con,"INSERT INTO `customers` (`fullname`, `phone`, `email`, `password`) VALUES ( '$fullname', '$phone', '$email', '$password')");
			if($query==TRUE)
			{
				?>
				<script>
					alert("Registered successfully");
					window.location.href ="login.php";
				</script>
				
				<?php
			}
			else
			{
				?>
				<script>
					alert("Some error occured");
				</script>
				<?php
			}
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign-up -OAcharya</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-26">
						Register
					</span>
					
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="name" data-validate = "enter only characters">
						<span class="focus-input100" data-placeholder="Name"></span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="tel" name="phone" pattern="[0-9]{10}">
						<span class="focus-input100" data-placeholder="Contact No"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit" id="submit">
								Sign up
							</button>
						</div>
					</div>

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>