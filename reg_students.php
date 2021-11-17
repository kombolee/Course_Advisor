<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courseAdvisor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



$sql = "SELECT s.studentID, s.firstName, s.lastName, s.dob, s.gender, s.phoneNo, s.address, s.nationality, d.departmentName as Department FROM registration r, student s, department d WHERE s.studentID= r.studentID AND s.departmentCode= d.departmentCode;";
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Course Advisor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Custom box css -->
    <link href="assets/libs/custombox/custombox.min.css" rel="stylesheet">

    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <div class="navbar-custom">
            <ul class="list-unstyled topnav-menu float-right mb-0">

                <li class="d-none d-sm-block">
                    <form class="app-search">
                        <div class="app-search-box">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <button class="btn" type="submit">
                                        <i class="fe-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>



                <li class="dropdown notification-list">
                    <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown"
                        href="#" role="button" aria-haspopup="false" aria-expanded="false">
                        <img src="assets/images/users/user-1.jpg" alt="user-image" class="rounded-circle">
                        <span class="pro-user-name ml-1">
                            Admin
                        </span>
                    </a>

                </li>




            </ul>

            <!-- LOGO -->
            <div class="logo-box">
                <a href="index.html" class="logo text-center">
                    <span class="logo-lg">
                        <img src="assets/images/ncdmb_logo_large.png_" alt="" height="50">
                        <!-- <span class="logo-lg-text-light">UBold</span> -->
                    </span>
                    <span class="logo-sm">
                        <!-- <span class="logo-sm-text-dark">U</span> -->
                        <img src="assets/images/ncdmb_logo_small.png_" alt="" height="50">
                    </span>
                </a>
            </div>

            <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                <li>
                    <button class="button-menu-mobile waves-effect waves-light">
                        <i class="fe-menu"></i>
                    </button>
                </li>

            </ul>
        </div>
        <!-- end Topbar -->

         <!-- ========== Left Sidebar Start ========== -->
         <div class="left-side-menu">

<div class="slimscroll-menu">

    <!--- Sidemenu -->
    <div id="sidebar-menu">

        <ul class="metismenu" id="side-menu">

            <li class="menu-title">ADMIN</li>

            <li>
                <a href="all_students.php">
                    <i class="fe-airplay"></i>
                    <span> List of All Students </span>
                </a>

            </li>
            <li>
        <a href="all_staff.php">
            <i class="fe-airplay"></i>
            <span> List of All Staff </span>
        </a>

    </li>
            <li>
                <a href="reg_students.php">
                    <i class="fe-airplay"></i>
                    <span> List of Registered Students </span>
                </a>

            </li>
            <li>
                <a href="courses.php">
                    <i class="fe-airplay"></i>
                    <span> List of Courses </span>
                </a>

            </li>
            <li>
                <a href="building.php">
                    <i class="fe-airplay"></i>
                    <span> List Building </span>
                </a>

            </li>
            <li>
                <a href="register_new_student.php">
                    <i class="fe-airplay"></i>
                    <span> Add New Student </span>
                </a>

            </li>
            <li>
                <a href="register_new_staff.php">
                    <i class="fe-airplay"></i>
                    <span> Add New Staff </span>
                </a>

            </li>
            <li>
                <a href="register_new_course.php">
                    <i class="fe-airplay"></i>
                    <span> Add New Course </span>
                </a>

            </li>
            
            

            <li class="menu-title">STUDENT</li>

            <li>
                <a href="index.php">
                    <i class="fe-airplay"></i>
                    <span> Home</span>
                </a>

            </li>



        </ul>

    </div>
    <!-- End Sidebar -->


                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">

                                <h4 class="page-title">List of Students</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-body">

                                <?php
                                    if(isset($_SESSION['status']))
                                    {
                                        echo "<h4>".$_SESSION['status']."</h4>";
                                        unset($_SESSION['status']);
                                    }
                                ?>

                                    <div class="table-responsive">
                                        <table class="table table-centered table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Student ID</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Date of Birth</th>
                                                    <th>Phone</th>
                                                    <th>Gender</th>
                                                    <th>Address</th>
                                                    <th>Nationality</th>
                                                    <th>Department</th>

                                                </tr>
                                            </thead>
                                            <?php
                                            //Fetch Data form database
                                            if($result->num_rows > 0){
	                                        while($row = $result->fetch_assoc()){
		                                    ?>
                                            <tbody>
                                                <tr>
                                                    <td class="table-user">
                                                    <?php echo $row["studentID"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row["firstName"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row["lastName"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row["dob"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row["phoneNo"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row["gender"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row["address"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row["nationality"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row["Department"]; ?>
                                                    </td>
                                                    
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                else
                                                {
                                                    ?>
                                                    <tr>
                                                    <th colspan="2">There's No data found!!!</th>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                              
                                            </tbody>
                                        </table>
                                        <form method="GET" action="register_new_student.php">
                                        <button class="btn btn-primary waves-effect waves-light" type="submit" name="submit">
                                               ADD NEW STUDENT RECORD
                                            </button>
                                            </form>
                                    </div>



                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col -->


                    </div>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            2021 &copy; Advanced Database Project<a href=""> (TOPN)</a>
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->

   
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- Modal-Effect -->
    <script src="assets/libs/custombox/custombox.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.min.js"></script>

</body>

</html>