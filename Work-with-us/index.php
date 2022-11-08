<?php
error_reporting(0);
session_start();
include_once('../includes/config.php'); 
if(isset($_POST['signup']))
{
	$fullname=$_POST['name'];
	$password=md5($_POST['pass']);
	$phone=$_POST['phone'];
	$status="Not started";
	if(!empty($_POST["email"])) 
	{	
		$email=$_POST['email'];
		$result =mysqli_query($con,"SELECT * FROM pandits WHERE email='$email'");
		$count=mysqli_num_rows($result);
		if($count>0)
		{
			echo "<script>alert('email already exists')</script>";	
		} 
		else
		{	
			$query=mysqli_query($con,"INSERT INTO `pandits` (`fullname`, `email`, `password`, `mobile_no`,`status`) VALUES ( '$fullname', '$email', '$password', '$phone','$status')");
			if($query==TRUE)
			{
				?>
				<script>
					alert("Registered successfully");
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
if(isset($_POST['login']))
{
	
	$email=$_POST['login-email'];
	$pass=md5($_POST['login-pass']);
	$ret=mysqli_query($con,"SELECT * FROM pandits WHERE email='$email' and password='$pass'");
	$num=mysqli_fetch_array($ret);
	if($num>0)
	{
	
		$_SESSION['login']=$_POST['email'];
		$_SESSION['name']=$num['fullname'];
		$_SESSION['id']=$num['pandit_id'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		$host=$_SERVER['HTTP_HOST'];
		header("location:Dashboard/index.php");
		exit();
	}
	else
	{
		$extra="index.php";
		echo "<script> alert('Credentials are wrong ........')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Partners Portal</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css'>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form method="post">
			<h1>Create Account</h1>
			
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="name"/>
			<input type="mobile" placeholder="Mobile no" type="tel" name="phone" pattern="[0-9]{10}"/>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="pass" />
			<button name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form method="post">
			<h1>Sign in</h1>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="login-email"/>
			<input type="password" placeholder="Password" name="login-pass"/>
			
			<button name="login">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
