<?php
include 'db.php';
$roll1=$_GET['Roll'];

$sql ="DELETE FROM info WHERE Roll=$roll1";

$result1=mysqli_query($conn,$sql);

if($result1){
    header('location:index.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>