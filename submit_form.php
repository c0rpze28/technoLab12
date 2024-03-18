<?php

// CSV file path
$csvFilePath = 'userdata.csv';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // Create CSV file if it doesn't exist
    if (!file_exists($csvFilePath)) {
        $file = fopen($csvFilePath, 'w'); // Create new file
        fputcsv($file, array('Name', 'Email', 'Phone', 'Message')); // Add headers
        fclose($file);
    }

    // Open CSV file for appending
    $file = fopen($csvFilePath, 'a');

    // Write form data to CSV file
    fputcsv($file, array($name, $email, $phone, $message));

    // Close the file
    fclose($file);
}

// Redirect back to the page after submission
header("Location: index.html");
exit;
?>
