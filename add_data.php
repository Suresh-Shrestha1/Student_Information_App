<?php
$roll=$_POST['Roll'];
$name=$_POST['Name'];
$address=$_POST['Address'];
$gender=$_POST['Gender'];
$class=$_POST['Class'];
$faculty=$_POST['Faculty'];
$mobile=$_POST['Mobile'];
include 'db.php';
$sql="INSERT INTO info (Roll, Name, Address, Gender, Class, Faculty, Mobile) VALUES ('$roll', '$name', '$address', '$gender', '$class', '$faculty', '$mobile')";
$result=mysqli_query($conn,$sql);
if($result)
echo"Data are inseted sucesfully";
else
echo "Data are not inseted successfully";
?>