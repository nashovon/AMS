<?php 

require 'PHPMailer/PHPMailerAutoload.php';

include 'connection.php';



$name = $_POST ["name"];
$post = $_POST ["post"];
$email = $_POST ["email"];
$mobile = $_POST ["mobile"];
$pass = rand(11111,99999);


//$query = "SELECT * FROM admin WHERE username='$givenu' AND password='$givenp'";
$query = "INSERT INTO teacherinfo(teachername,email,post,mobile,password) VALUES ('$name','$email','$post','$mobile','$pass') ";
$result = mysqli_query($connection,$query) or die("Failed to query database" .mysqli_error());



$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'projectams00@gmail.com';                 // SMTP username
$mail->Password = 'amspass5555';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('AMS', 'ADMIN');
$mail->addAddress($email, $name);


$mail->isHTML(true);                                 

$mail->Subject = 'Password';
$mail->Body    = $pass;


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}


header("Refresh:0; url=addteacher.php");

?>