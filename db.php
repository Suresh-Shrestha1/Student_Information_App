<?php
$host ="localhost";
$user ="root";
$password ="";
$dbname ="student";
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// $conn=mysqli_connect($host,$user,$password,$dbname) or die();
?>