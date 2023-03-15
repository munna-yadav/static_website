<?php

$conn = mysqli_connect("localhost", "root","", "website");



// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the ID of the PDF file to delete
$id = $_POST['id'];

// Retrieve the file path from the database
$sql = "SELECT cv FROM application_dralion WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$file_path = $row['cv'];

// Delete the PDF file from the folder
if (unlink($file_path)) {
    // If the file was successfully deleted, delete the record from the database
    $sql = "DELETE FROM cv WHERE id = $id";
    if (mysqli_query($conn, $sql)) {
        // If the record was successfully deleted, redirect back to the PDF list page
        header('Location: pdf_list.php');
        exit();
    } else {
        // If there was an error deleting the record, display an error message
        echo 'Error deleting record: ' . mysqli_error($conn);
    }
} 
