<?php 


include 'connection.php';



$name = $_POST ["name"];
$reg = $_POST ["reg"];
$semester = $_POST ["semester"];
$email = $_POST ["email"];
$mobile = $_POST ["mobile"];




$query = "INSERT INTO studentinfo(name,reg,semester,email,mobile) VALUES ('$name','$reg','$semester','$email','$mobile') ";
$result = mysqli_query($connection,$query) or die("Failed to query database" .mysqli_error());



header("Refresh:0; url=addstudent.php");




 ?>