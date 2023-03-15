<?php

// Set the folder path where the PDF files are located
$folder_path ='C:\xampp\htdocs\Website\cv';

// Get all the PDF files in the folder
$pdf_files = glob($folder_path . '*.pdf');

// Loop through the PDF files and insert them into the database
foreach ($pdf_files as $pdf_file) {
    // Insert the PDF file into the database
    insert_pdf_file($pdf_file);
}

// Function to insert the PDF file into the database
function insert_pdf_file($pdf_file) {
    // Code to insert the PDF file into the database goes here
    // For example, you could use the following SQL query to insert the PDF file into a database table:
    // INSERT INTO pdf_files (file_name, file_path) VALUES ('filename.pdf', 'path/to/folder/filename.pdf')
}

// Set the time interval for checking the folder for new PDF files (in seconds)
$interval = 60;

// Loop indefinitely and check for new PDF files in the folder
while (true) {
    // Get all the PDF files in the folder
    $pdf_files = glob($folder_path . '*.pdf');

    // Loop through the PDF files and insert any new PDF files into the database
    foreach ($pdf_files as $pdf_file) {
        // Check if the PDF file has already been inserted into the database
        if (!is_pdf_file_in_database($pdf_file)) {
            // Insert the new PDF file into the database
            insert_pdf_file($pdf_file);
        }
    }

    // Wait for the specified interval before checking for new PDF files again
    sleep($interval);
}

// Function to check if the PDF file is already in the database
function is_pdf_file_in_database($pdf_file) {
    // Code to check if the PDF file is already in the database goes here
    // For example, you could use the following SQL query to check if the PDF file is in a database table:
    // SELECT COUNT(*) FROM pdf_files WHERE file_name = 'filename.pdf' AND file_path = 'path/to/folder/filename.pdf'
    // If the query returns a count of 1 or more, then the PDF file is already in the database
}
