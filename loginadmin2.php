<?php 

include 'connection.php';



$givenu = $_POST ["username"];
$givenp = $_POST ["password"];

$query = "SELECT * FROM admin WHERE username='$givenu' AND password='$givenp'";
$result = mysqli_query($connection,$query) or die("Failed to query database" .mysqli_error());

$row =mysqli_fetch_array($result);

$dbu = $row['username'];
$dbp = $row['password'];


if($dbu==$givenu && $dbp==$givenp){

	header("Location: adminoptions.php");
	die();
}

else{


	header("Refresh:0; url=loginadmin.php");
	//header("Location: loginadmin.php");
	//die();
}




 ?>