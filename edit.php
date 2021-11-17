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
    $phoneNo = $_POST['phoneNo'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $nationality = $_POST['nationality'];

   

    

    $query = "UPDATE student SET firstName = '$firstName', lastName = '$lastName', phoneNo = '$phoneNo', gender = '$gender', address = '$address', nationality = '$nationality' WHERE studentID = '$studentID' ";

    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Data Update Successful";
        header("Location: all_students.php");
    }
    else
    {
        $_SESSION['status'] = "Data Update Failed";
        header("Location: all_students.php");
    }

}






