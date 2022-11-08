<?php
session_start();
if(empty($_SESSION["id"]))
{
    echo "<script language='javascript'>
    alert('Please login first ...');
    document.location='../../index.html';
    </script>";
}

error_reporting(0);

include_once('../../includes/config.php');

$id=$_SESSION["id"];
$sql = "SELECT * FROM pandits where pandit_id='$id'";
if($result = mysqli_query($con, $sql))
{
    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_array($result);
        $status=$row['status'];
        if($row['status']=="Not started")
        {
            $style = "\"display:block\"";
            $style1 = "\"display:none\"";
        }
        
        if( $row['status']=="Rejected")
        {
            $style = "\"display:block\"";
            $style1 = "\"display:none\"";
            $remarks=$row['remarks'];
            $show="Your Application got rejected due to following reason :<br> $remarks <br> Please make changes and ";
        }
        if($row['status']=="Approved")
        {
            $style = "\"display:block\"";
            $style1 = "\"display:block\"";
        }   
        if( $row['status']=="In Progress")
        {
            $style = "\"display:block\""; 
            $style1 = "\"display:none\""; 
        }
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
        <title>Pandit | Dashboard</title>
        <link href="css/styles.css" rel="stylesheet" />
		<link href="css/stylesform.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed" >
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">OAcharya</a>
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
                            </a>
                            <div class="sb-sidenav-menu-heading" style=<?php echo $style1; ?>>Bookings</div>
                           
                            <a class="nav-link" href="mybookings.php" style=<?php echo $style1; ?>>
                                <div class="sb-nav-link-icon" style=<?php echo $style1; ?>><i class="fas fa-table"></i>
                                 My Bookings
                                </div>
                            </a>
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
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                  

                        <div class="card mb-4" style=<?php echo $style; ?>  >
                        
                            <div class="card-header" >
                                Status
                            </div>
                            <div class="card-body" >
                            <?php 
                                if($row['status']=="Rejected")
                                {
                                    echo $show; 
                                    echo "Upload your certificates <a href='upload.php'> here</a>"; 
                                }
                                if($row['status']=="Approved")
                                {
                                    echo "Congratulations !! <br> Your applications has been approved. <br> You will get booking soon ! <br> You can check Your booking through MyBookings option in side menu.. ";
                                }
                                if($row['status']=="Not started")
                                {
                                    echo "Upload your certificates <a href='upload.php'> here</a>";
                                }
                                if($row['status']=="In Progress")
                                {
                                    echo "Your application is being Under process . <br> please be patient ";
                                }
                                
                                
                                ?>
                                
                                
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
