<?php

    // Get the form data
    $email = $_POST['mail'];
    $name = $_POST['name'];
    $subscribe = isset($_POST['subscribe']) ? 'Yes' : 'No';

    // Open the CSV file, or create it if it doesn't exist
    $file = fopen('../resources/newsletter.csv', 'a');

    // Write the form data to the CSV file
    fputcsv($file, [$name, $email, $subscribe],";");

    // Close the CSV file
    fclose($file);

    // Redirect back to the home page (or wherever you want)
    header('Location: ../index.php');
?>