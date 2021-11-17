<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courseAdvisor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$staffNo = $_GET['delete'];
$query = "DELETE FROM staff WHERE staffNo='$staffNo'";

$data = mysqli_query($conn, $query);

if($data)
{
    $_SESSION['status'] = "Data Deletion Successful";
        header("Location: all_staff.php");
}

else
{
    $_SESSION['status'] = "Data Deletion Failed";
        header("Location: all_staff.php");
}

?>