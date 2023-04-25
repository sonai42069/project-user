<?php
session_start();
$con=mysqli_connect('localhost','root','','ecom');
if($_SESSION['email']){
    $email=$_SESSION['email'];
}
else{
    $email=$_POST['email'];
}

$res=mysqli_query($con,"select * from users where email='$email'");
$count=mysqli_num_rows($res);
if($count>0){

/* echo $email; */
$otp=rand(100000,999999);
mysqli_query($con,"UPDATE users set otp='$otp' where email='$email'");
$_SESSION['email']=$email;
    $_SESSION['otp']=$otp;

 /*   $otp=rand(100000,999999);
    $_SESSION['otp']=$otp;
    $subject="OTP for login";
    $message="Your OTP is ".$otp;
    $sender="From: */
/*  use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;  */

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer\PHPMailer\PHPMailer(true);


try {
    //Server settings
/*     $mail->SMTPDebug = SMTP::DEBUG_SERVER;*/                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'birprotaproy8@gmail.com';                     //SMTP username
    $mail->Password   = 'kevimfyccnbvvhsq';                               //SMTP password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('from@example.com', 'Mailer');
    $mail->addAddress($email);     //Add a recipient  'hsoumitra42069@gmail.com'


    $massage= "this is the otp ".$otp;
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b><br>'.$massage.'';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    ?>
    <script>
        window.location.href='verify_otp.php';
    </script>
    <?php
    echo 'yes';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
else{
    echo '<script>alert("Entered email not exist.Please Enetr valid email")</script>';
    ?>
    <script>
        window.location.href='forverify.php';

    </script>
    <?php
    /* header('location: reset.php'); */
}
?>