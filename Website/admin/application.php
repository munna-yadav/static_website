

<table>
    <thead><tr>
        <th>id</th>
        <th>name</th>
        <th>address</th>
        <th>phone</th>
        <th>email</th>
        <th>cv</th>
    </tr></thead>
</table>
<?php
include('pdf_function.php');
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}



$conn = mysqli_connect("localhost", "root","password", "website");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// include('db.php');
?>

<?php
     display_pdf();
?>
<?php


// Close the database connection
mysqli_close($conn);
?>
