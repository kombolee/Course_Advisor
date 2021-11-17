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
    $studentID =  $_POST['studentID'];
    $firstName = $_POST['firstName'];
    $lastName =  $_POST['lastName'];
    $dob = date('Y-m-d', strtotime($_POST['dob']));
    $phoneNo = $_POST['phoneNo'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $createDate = date('y-m-d');
    $nationality = $_POST['nationality'];
    $departmentCode = $_POST['departmentCode'];

    $query = "INSERT INTO student (studentID, firstName, lastName, dob, phoneNo, gender, address, createDate, nationality, departmentCode) VALUES ('$studentID','$firstName','$lastName','$dob','$phoneNo','$gender','$address', '$createDate', '$nationality', '$departmentCode')";

    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Data Insertion Successful";
        header("Location: register_new_student.php");
    }
    else
    {
        $_SESSION['status'] = "Data Insertion Failed";
        header("Location: register_new_student.php");
    }

}






