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
    $roomNo =  $_POST['roomNo'];
    $courseCode = $_POST['courseCode'];


    

    $query = "UPDATE building SET roomNo = '$roomNo', courseCode = '$courseCode' WHERE roomNo = '$roomNo' ";

    $query_run = mysqli_query($conn, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = "Data Update Successful";
        header("Location: building.php");
    }
    else
    {
        $_SESSION['status'] = "Data Update Failed";
        header("Location: building.php");
    }

}






