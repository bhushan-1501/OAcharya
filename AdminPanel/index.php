<?php 
session_start();
include_once('../includes/config.php');

if(isset($_POST['login']))
{

    $id=$_POST['id'];
	$pass=$_POST['pass'];
    
	$ret=mysqli_query($con,"SELECT * FROM admin WHERE admin_id='$id' and admin_pass='$pass'");
    $num=mysqli_fetch_array($ret);
	if($num>0)
	{
		$_SESSION['login']=$_POST['id'];
		$_SESSION['name']=$num['admin_name'];
		$_SESSION['id']=$num['id'];
		$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
		$host=$_SERVER['HTTP_HOST'];
		header("location:Dashboard/index.php");
		exit();
	}
	else
	{
		echo "<script> alert('Credentials are wrong')</script>";
	}
}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>OAcharya Admin Panel</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->

<div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-key">
                    <i class="fa fa-key" aria-hidden="true"></i>
                </div>
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">
                        <form method="post">
                            <div class="form-group">
                                <label class="form-control-label">ADMIN_ID</label>
                                <input type="text" class="form-control" name="id">
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD</label>
                                <input type="password" class="form-control" name="pass">
                            </div>

                            <div class="col-lg-12 loginbttm">
                                
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
            </div>
        </div>
<!-- partial -->
  
</body>
</html>
