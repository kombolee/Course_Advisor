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

$studentID = $_POST['studentID'];

$sql = "SELECT * FROM student WHERE studentID ='$studentID' ";
$result = $conn->query($sql);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Course Advisor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
                            <div class="card">
                                <div class="card-body">


                                    <div class="table-responsive">
                                        <div class="card-box">

                                            <p class="text-muted font-14 m-b-20">
                                                Kindly fill the form below to check your course registeration details
                                            </p>

                                            <form action="#" class="parsley-examples" method="POST">
                                                <div class="form-group">
                                                    <label for="studentID">Student ID<span
                                                            class="text-danger">*</span></label>
                                                    <input type="text" name="studentID" parsley-trigger="change" required
                                                        placeholder="Enter your student ID" class="form-control"
                                                        id="studentID">
                                                </div>

                                                <div class="form-group">
                                                    <label for="semester">Current Semester <span
                                                            class="text-danger">*</span></label>
                                                    <select id="semester" class="form-control" required="" name="semester">
                                                        <option value="">Choose..</option>
                                                        <option value="spring">Spring</option>
                                                        <option value="summer">Summer</option>
                                                        <option value="fall">Fall</option>
                                                    </select>
                                                </div>

                                        </div>

                                        <div class="form-group text-right m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit" name="search">
                                                Search Student
                                            </button>
                                        </div>

                                        </form>
                                    </div> <!-- end card-box -->
                               
                                    <h5 class="mb-3 mt-4 text-uppercase bg-light p-2"><i
                                        class="mdi mdi-account-circle mr-1"></i> Search Result</h5>
                                
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

                                                    <th style="width: 82px;">Action</th>
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
                                                    <a href='student.php?view=<?php echo $row['studentID']; ?>'><button class="btn btn-primary waves-effect waves-light" type="submit" name="view">
                                                View
                                                    </button></a>
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
                                            </div>
                               



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

    <!-- Modal -->
    <div id="custom-modal" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.modal.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Add New User</h4>
        <div class="custom-modal-text text-left">
            <form>
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" class="form-control" id="firstname" placeholder="Enter Firstname">
                </div>
                <div class="form-group">
                    <label for="lastname">Lastname</label>
                    <input type="text" class="form-control" id="lastname" placeholder="Enter Lastname">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Input Password">
                </div>
                <div class="form-group">
                    <label for="password">Repeat Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Repeat Password">
                </div>
                <div class="form-group">
                    <label for="roles">Role</label>
                    <select class="form-control" id="roles" name="roles">
                        <option value="admin">Admin</option>
                        <option value="editor">Editor</option>
                        <option value="read_only">Read-Only</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="position">Phone</label>
                    <input type="text" class="form-control" id="position" placeholder="Enter phone number">
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light m-l-10"
                        onclick="Custombox.close();">Cancel</button>
                </div>
            </form>
        </div>
    </div>


    <!-- Right Sidebar -->
    <div class="right-bar">
        <div class="rightbar-title">
            <a href="javascript:void(0);" class="right-bar-toggle float-right">
                <i class="dripicons-cross noti-icon"></i>
            </a>
            <h5 class="m-0 text-white">Settings</h5>
        </div>
        <div class="slimscroll-menu">
            <!-- User box -->
            <div class="user-box">
                <div class="user-img">
                    <img src="assets/images/users/user-1.jpg" alt="user-img" title="Mat Helme"
                        class="rounded-circle img-fluid">
                    <a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
                </div>

                <h5><a href="javascript: void(0);">Geneva Kennedy</a> </h5>
                <p class="text-muted mb-0"><small>Admin Head</small></p>
            </div>

            <!-- Settings -->
            <hr class="mt-0" />
            <h5 class="pl-3">Basic Settings</h5>
            <hr class="mb-0" />

            <div class="p-3">
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox1" type="checkbox" checked>
                    <label for="Rcheckbox1">
                        Notifications
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox2" type="checkbox" checked>
                    <label for="Rcheckbox2">
                        API Access
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox3" type="checkbox">
                    <label for="Rcheckbox3">
                        Auto Updates
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-2">
                    <input id="Rcheckbox4" type="checkbox" checked>
                    <label for="Rcheckbox4">
                        Online Status
                    </label>
                </div>
                <div class="checkbox checkbox-primary mb-0">
                    <input id="Rcheckbox5" type="checkbox" checked>
                    <label for="Rcheckbox5">
                        Auto Payout
                    </label>
                </div>
            </div>

            <!-- Timeline -->
            <hr class="mt-0" />
            <h5 class="px-3">Messages <span class="float-right badge badge-pill badge-danger">25</span></h5>
            <hr class="mb-0" />
            <div class="p-3">
                <div class="inbox-widget">
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-2.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Tomaslau</a></p>
                        <p class="inbox-item-text">I've finished it! See you so...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-3.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Stillnotdavid</a>
                        </p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-4.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Kurafire</a></p>
                        <p class="inbox-item-text">Nice to meet you</p>
                    </div>

                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-5.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Shahedk</a></p>
                        <p class="inbox-item-text">Hey! there I'm available...</p>
                    </div>
                    <div class="inbox-item">
                        <div class="inbox-item-img"><img src="assets/images/users/user-6.jpg" class="rounded-circle"
                                alt=""></div>
                        <p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">Adhamdannaway</a>
                        </p>
                        <p class="inbox-item-text">This theme is awesome!</p>
                    </div>
                </div> <!-- end inbox-widget -->
            </div> <!-- end .p-3-->

        </div> <!-- end slimscroll-menu-->
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