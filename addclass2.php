<?php 

include 'connection.php';


$name = $_POST ["course"];
$course = $_POST ["teacher"];
$semester =$_POST["semester"];




$query = "INSERT INTO class(coursename,teachername,semester) VALUES ('$name','$course','$semester') ";
$result = mysqli_query($connection,$query) or die("Failed to query database" .mysqli_error());




header("Refresh:0; url=addclass.php");

?>

