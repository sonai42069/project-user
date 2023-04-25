<?php
session_start();
$con=mysqli_connect('localhost','root','','ecom');
$otp=$_POST['otp'];
$email=$_SESSION['EMAIL'];
$res=mysqli_query($con,"SELECT * from user where email='$email' AND otp='$otp'");
$count=mysqli_num_rows($res);
if($count>0){
	mysqli_query($con,"UPDATE user set otp='' where email='$email'");
	$_SESSION['IS_LOGIN']=$email;
	echo "yes";
}else{
	echo "not_exist";
}
?>