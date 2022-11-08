<?php
include_once('../../includes/config.php');
session_start();
if(empty($_SESSION["id"]))
{
    echo "<script language='javascript'>
    alert('Please login first ...');
    document.location='../../index.html';
    </script>";
}
$id=$_SESSION["id"];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>OAcharya | MyBookings</title>
        <link href="css/styles.css" rel="stylesheet" />
		<link href="css/stylesform.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
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
                            
                            <div class="sb-sidenav-menu-heading" style="">Bookings</div>
                           
                            <a class="nav-link" href="mybookings.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                MyBookings
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
                        <h1 class="mt-4">My Bookings </h1><br>
                        
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Booking table
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Booking Id</th>
                                                <th>Customer Id</th>
                                                <th>Customer Name</th>
                                                <th>Customer Contact</th>
                                                <th>Address</th>
                                                <th>Pooja</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Callback</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Booking Id</th>
                                                <th>Customer Id</th>
                                                <th>Customer Name</th>
                                                <th>Customer Contact</th>
                                                <th>Address</th>
                                                <th>Pooja</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Time</th>
                                                <th>Callback</th>
                                                
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                        $sql = "SELECT * FROM panditbooking where pandit_id='$id'";
                                        if($result = mysqli_query($con, $sql))
                                        {
                                            if(mysqli_num_rows($result) > 0)
                                            {
                                                while($row = mysqli_fetch_array($result))
                                                {
                                                    echo "<tr>";
                                                        echo "<td>" . $row['booking_id'] . "</td>";
                                                        echo "<td>" . $row['customer_id'] . "</td>";
                                                        echo "<td>" . $row['customer_name'] . "</td>";
                                                        echo "<td>" . $row['customer_phone'] . "</td>";
                                                        echo "<td>" . $row['Address'] . "</td>";
                                                        echo "<td>" . $row['pooja'] . "</td>";
                                                        echo "<td>" . $row['amount'] . "</td>";
                                                        echo "<td>" . $row['Date'] . "</td>";
                                                        echo "<td>" . $row['time'] . "</td>";
                                                        echo "<td>" . $row['callback'] . "</td>";
                                                    echo "</tr>";
                                                }
                                            }
                                        }
                                                ?>
                                           
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
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
