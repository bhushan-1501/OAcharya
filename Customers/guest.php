<?php
error_reporting(0);
session_start();
include_once('../includes/config.php'); 
$_SESSION['login']=$_POST['email'];
$_SESSION['name']="Guest".rand(10,1000);
$_SESSION['id']="Guest";
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
$host=$_SERVER['HTTP_HOST'];
header("location:../Dashboard/index.php");
exit();
?>