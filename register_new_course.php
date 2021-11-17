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

$studentID = $_GET['view'];

$sql = "SELECT * FROM student where studentID = '$studentID' ";
$sql_course = "SELECT * FROM coursetable";
$result = $conn->query($sql);
$result_course = $conn->query($sql_course);



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

                                <h4 class="page-title">WELCOME</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->


                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card-box">
                                <div class="media mb-3">
                                    <img class="d-flex mr-3 rounded-circle avatar-lg"
                                        src="assets/images/users/user-8.jpg" alt="Generic placeholder image">
                                    
                                        <?php
                                            //Fetch Data form database
                                            if($result->num_rows > 0){
	                                        while($row = $result->fetch_assoc()){
		                                    ?>

                                    <div class="media-body">
                                        <h4 class="mt-0 mb-1"><?php echo $row["firstName"]; ?><?php echo " "; ?><?php echo $row["lastName"]; ?></h4>
                                        <p class="text-muted"><?php echo $row["studentID"]; ?></p>
                                        <!-- <p class="text-muted"><i class="mdi mdi-office-building"></i> <?php echo $row["studentID"]; ?> -->
                                        </p>

                                    </div>
                                </div>

                                

                                <h5 class="mb-3 mt-4 text-uppercase bg-light p-2"><i
                                        class="mdi mdi-account-circle mr-1"></i> Add Course</h5>

                                <div class="media mb-3">
                                <div class="table-responsive">

                                <form action="insert_new_course.php" method="POST" class="parsley-examples">

                                        <table class="table table-centered table-hover mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Select</th>
                                                    <th>Course Code</th>
                                                    <th>Course Name</th>
                                                    <th>Credit Hours</th>
                                                    <th>Semester</th>
                                                    
                                                </tr>
                                            </thead>
                                            <?php
                                            //Fetch Data form database
                                            if($result_course->num_rows > 0){
	                                        while($row_course = $result_course->fetch_assoc()){
		                                    ?>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                    <input type="checkbox" id="course" name="check_list[]" value="<?php echo $row['courseCode'] ?>">
                                                    </td>
                                                    <td class="table-user">
                                                    <?php echo $row_course["courseCode"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row_course["courseName"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row_course["creditHours"]; ?>
                                                    </td>
                                                    <td>
                                                    <?php echo $row_course["semester"]; ?>
                                                    </td>
                                                    
                                                    
                                                </tr>
                                                <?php
                                                    }
                                                }
                                                else
                                                {
                                                    ?>
                                                    <tr>
                                                    <th colspan="2">Maximum courses regestered</th>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                              
                                            </tbody>

                                            
                                        </table>

                                        <button class="btn btn-primary waves-effect waves-light">
                                               ADD COURSE
                                            </button>
                                       
                                            



                                        

                                            </form>
                                            </div>
                                </div>

                            </div>
                        </div> <!-- end card-->
                    </div> <!-- end col -->
                    <?php
                                                    }
                                                }
                                                else
                                                {
                                                    ?>
                                                    <tr>
                                                    <th colspan="2">Maximum courses regestered</th>
                                                    </tr>
                                                    <?php
                                                }
                                                ?>

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

    <!-- Modal -->
    


    
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