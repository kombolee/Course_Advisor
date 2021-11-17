<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "courseAdvisor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

$roomNo = $_GET['delete'];
$query = "DELETE FROM building WHERE roomNo='$roomNo'";

$data = mysqli_query($conn, $query);

if($data)
{
    $_SESSION['status'] = "Data Deletion Successful";
        header("Location: building.php");
}

else
{
    $_SESSION['status'] = "Data Deletion Failed";
        header("Location: building.php");
}

?>