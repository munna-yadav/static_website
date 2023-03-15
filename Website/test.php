<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
?>
welcome
<a href="logout.php">Logout</a>

