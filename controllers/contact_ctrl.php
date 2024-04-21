<?php

    // Get the form data
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $subject = $_POST['subject'];

    // Open the CSV file, or create it if it doesn't exist
    $file = fopen('../resources/contact.csv', 'a');

    // Write the form data to the CSV file
    fputcsv($file, [$firstName, $lastName, $email, $country, $subject],";");

    // Close the CSV file
    fclose($file);

    // Redirect back to the contact page
    header('Location: ../contact.php');
?>