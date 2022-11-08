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
if(isset($_POST['approve']))
{   
    $status="Approved";
    $pandit_id=$_GET['pandit_id'];
    $query=mysqli_query($con,"UPDATE pandits SET status='$status' WHERE pandit_id = '$pandit_id'"); 
        if($query==TRUE) {
            echo "<script>alert('Pandit Application successfully approved.');</script>";
            echo "<script language='javascript'>
            document.location='inprogress.php';
            </script>";
          } else {
            
            echo "<script>alert('error');</script>";
          }
    
}
if(isset($_POST['reject']))
{
    $status="Rejected";
    $remarks=$_POST['remarks'];
    $pandit_id=$_GET['pandit_id'];
    $query=mysqli_query($con,"UPDATE pandits SET status='$status',remarks='$remarks' WHERE pandit_id = '$pandit_id'"); 
        if($query==TRUE) {
            echo "<script>alert('Pandit Application successfully rejected.');</script>";
            echo "<script language='javascript'>
            document.location='inprogress.php';
            </script>";
          } else {
            
            echo "<script>alert('error');</script>";
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
        <title>OAcharya | Authenticate</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="css/form.css" rel="stylesheet" />
		<link href="css/stylesform.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style>
input[type=text] {
  width: 30%;
  height:40px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 20px;
  box-sizing: border-box;
}
#approve
{
  width: 20%;
  background-color: #28a745;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}
#reject,#reject1 
{
  width: 20%;
  background-color: #dc3545;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}
        </style>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Admin Panel</a>
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
                            <div class="sb-sidenav-menu-heading">WorkStation</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Pandit's Area
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                 <a class="nav-link" href="allpandits.php">All Pandits</a>
                                </nav>
                            </div><a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Customer's Area
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="allcustomers.php">All Customers</a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Pandit Bookings</div>
                           
                            <a class="nav-link" href="bookings.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Bookings
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
                        <h1 class="mt-4">Authenticate Pandit</h1><br>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                        Pandit details applications
                            </div>
                            <div class="card-body">
                                <?php
                                    $pandit_id=$_GET['pandit_id'];
                                    $sql = "SELECT * FROM pandits where pandit_id='$pandit_id'";
                                    if($result = mysqli_query($con, $sql))
                                    {
                                        if(mysqli_num_rows($result) > 0)
                                        {
                                            $row = mysqli_fetch_array($result);
                                           

                                ?>
                                <div class="student-profile py-4">
                                <div class="container">
                                    <div class="row">
                                    <div class="col-lg-4">
                                        <div class="card shadow-sm">
                                        <div class="card-header bg-transparent text-center">
                                            <?php
                                             $pic=$row['profile_pic'];
                                              echo "<img class='profile_img' src= '../../Work-with-us/Dashboard/images/$pic' alt=''>"
                                            ?>
                                            <h3><?php echo $row['fullname'] ?></h3>
                                        </div>
                                       
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="card shadow-sm">
                                        <div class="card-header bg-transparent border-0">
                                            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Pandit Information</h3>
                                        </div>
                                        <div class="card-body pt-0">
                                            <table class="table table-bordered">
                                            <tr>
                                                <th width="30%">Pandit Id</th>
                                                <td width="2%">:</td>
                                                <td><?php echo $row['pandit_id'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Email Id</th>
                                                <td width="2%">:</td>
                                                <td><?php echo $row['email'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Mobile No</th>
                                                <td width="2%">:</td>
                                                <td><?php echo $row['mobile_no'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">City</th>
                                                <td width="2%">:</td>
                                                <td><?php echo $row['city'] ?></td>
                                            </tr>
                                            <tr>
                                                <th width="30%">Experience</th>
                                                <td width="2%">:</td>
                                                <td><?php echo $row['experience']." years" ?></td>
                                            </tr>
                                            
                                            </table>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <form method="post" enctype="multipart/form-data">
                                    <label for="document">Document : </label><br><br>
                                    <?php        
                                        $certificate=$row['certificates'];
                                        echo "<iframe src='../../Work-with-us/Dashboard/upload/$certificate' width='100%'' height='500px'>
                                        </iframe>";
                                            }
                                        }
                                    ?>
                                    <br>
                                    
                                    <label for="mark-as">Mark as : </label> <br>
                                    
                                        <button id="approve" name="approve">Approve</button>
                                        </form>
                                        <button id="reject1"  onclick="show()">Reject</button>
                                <form id="form1" method="post" style="visibility:hidden;">
                                    <label for="remarks">Remarks :</label>
                                    <input type="text" name="remarks" required> <br><br>
                                    <button id="reject"  name="reject">Reject</button>
                                </form>
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
        <script>
        function show(){
            document.getElementById('reject1').style.visibility = 'hidden';
            document.getElementById('form1').style.visibility = '';
        }
            
          </script>;
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
