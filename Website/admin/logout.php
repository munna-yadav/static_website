<?php
session_start();
$con=mysqli_connect('localhost','root','password','website');
if($con){
	// echo "contectted successfully";
}else{
	echo "no connection";
}
$db=mysqli_select_db($con,'website');
if (isset($_POST['Logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location:login.php");
}
?>