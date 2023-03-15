
<table>
    <thead><tr>
        <th>Name</th>
        <th>address</th>
        <th>phone</th>
        <th>email</th>
        <th>message</th>
    </tr></thead>
</table>
<?php
include('contacts.php');
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
$conn = mysqli_connect("localhost", "root","password", "website");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo"no connection";
}


?>

<?php
     display_contact();
?>
<?php


// Close the database connection
mysqli_close($conn);
?>