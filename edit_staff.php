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
    $departmentCode = $_POST['departmentCode'];


    

    $query = "UPDATE staff SET staffNo = '$staffNo', lecturerFirstname = '$lecturerFirstname', lecturerLastname  = '$lecturerLastname', phoneNo = '$phoneNo', departmentCode = '$departmentCode' WHERE staffNo = '$staffNo' ";

    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Data Update Successful";
        header("Location: all_staff.php");
    }
    else
    {
        $_SESSION['status'] = "Data Update Failed";
        header("Location: all_staff.php");
    }

}






