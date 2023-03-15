<?php
session_start();

$con=mysqli_connect("localhost","root","password","website");
if($con){
	// echo "contectted successfully";
}else{
	echo "no connection";
}
// include('db.php');
$db=mysqli_select_db($con,'website');

if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password']; 

$sql="SELECT * FROM test WHERE username='$username' and password='$password'";

echo $sql;

$query=mysqli_query($con,$sql);



$row=mysqli_num_rows($query);
	if($row==1){
		echo "login sucessfull";
		$_SESSION['username']=$username; 
		header('location:./admin/index.php');
	}else{
		echo "login failed";

		header('location:login.php');
	}



}
?>