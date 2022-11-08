<?php
error_reporting(0);
session_start();
include_once('../../includes/config.php'); 

if (isset($_POST['submit'])) 
{ 
    $city=$_POST["city"];
    $id=$_SESSION["id"];
    $file=$_FILES['file'];
    $img=$_FILES['img'];
    $experience=$_POST["experience"];

    $filename=$_FILES['file']['name'];
    $fileTmpName=$_FILES['file']['tmp_name'];
    $status="In Progress";

    $fileNewName=uniqid('',true).".pdf";
    $fileDestination='upload/'.$fileNewName;

    $imgname=$_FILES['img']['name'];
    $imgTmpName=$_FILES['img']['tmp_name'];
    $status="In Progress";

    $imgNewName=uniqid('',true).".png";
    $imgDestination='images/'.$imgNewName;
    $chk_file=move_uploaded_file($fileTmpName,$fileDestination);
    $chk_img=move_uploaded_file($imgTmpName,$imgDestination);
    
    if($chk_file==$chk_img)
    {   
        
        
        $query=mysqli_query($con,"UPDATE pandits SET city = '$city',certificates='$fileNewName',status='$status' , profile_pic = '$imgNewName' ,experience='$experience'  WHERE pandit_id = '$id'");
       
        if($query==TRUE) {
            echo "<script>alert('You have applied successfully');</script>";
          } else {
            
            echo "<script>alert('$con->error');</script>";
          }
    }
    else
    {
        echo "<script>alert('error occured');</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pandit | Apply</title>
        <link href="css/styles.css" rel="stylesheet" />
		<link href="css/stylesform.css" rel="stylesheet" />
        <link href="css/checkbox.css" rel="stylesheet" />        
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    <style>
        .mb-4
        {
            width:80%;
        }

        .card-body
        {
            
            padding:20px;
            margin: 8px 0;
        }
        input[type=file]
        {width: 100%;}

input[type=text],input[type=number], select {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 20px;
  box-sizing: border-box;
}

input[type=submit] 
{
width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
    </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Pandit Panel</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
               
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i><?php 
				
                echo " ".$_SESSION['name'];
            ?></a>
                    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a><!--
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            
                            <div class="sb-sidenav-menu-heading">Addons</div>
                           
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>-->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        <?php 
				
                echo " ".$_SESSION['name'];
            ?>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Complete Profile </h1>
                        <br>
                        <div class="card mb-4">
                            <div class="card-header">
                                Instructions while uploading certificates : <br>
                                1. Upload only .pdf files and make sure your certificate is properly scanned.<br>
                                2. Make sure your name is as same as your login id.<br>
                                3. Select city where you live , jobs will be given according to your selected location so please choose city wisely. <br>
                                4. Be patient after uploading our team will soon check your certificate and verify you ..
                            </div>
                            <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                
                                <label for="name">Your Name : </label><br>
                                <input type="text" value="<?php echo $_SESSION['name']; ?>" disabled/> <br><br>
                                <label for="experience">Enter your Experience in years : </label><br>
                                <input type="number" name="experience" required/> <br><br>
                                <label for="profile_img">Select Profile Image : </label><br>
                                <input type="file" accept="image/*" name="img" required/>
                                <br><br>
                                <label for="certificates">Select Certificates : </label><br>
                                <input type="file" accept=".pdf" name="file" required/>
                                <br><br>
                                <label for="city">City :</label><br>
                                <select id="city" name="city">
                                <option value="none">-- Not Selected --</option>    
                                <option value="kalyan">Kalyan</option>
                                <option value="thane">Thane</option>
                                <option value="dombivali">Dombivali</option>
                                </select><br>
                                <input type="submit" value = "Apply as Pandit" name="submit">
                                
                            </form>
                           </div>
                        </div>

                       
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; OAcharya 2021</div>
                            <!--<div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>-->
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
