<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courseAdvisor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['submit']))
{
    $staffNo = $_POST['staffNo'];
    $lecturerFirstname = $_POST['lecturerFirstname'];
    $lecturerLastname = $_POST['lecturerLastname'];
    $phoneNo = $_POST['phoneNo'];
    $department = $_POST['department'];

    $query = "INSERT INTO staff (staffNo, lecturerFirstname, lecturerLastname, phoneNo, department) VALUES ('$staffNo','$lecturerFirstname','$lecturerLastname','$phoneNo','$department')";

    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Data Insertion Successful";
        header("Location: register_new_staff.php");
    }
    else
    {
        $_SESSION['status'] = "Data Insertion Failed";
        header("Location: register_new_staff.php");
    }

}






