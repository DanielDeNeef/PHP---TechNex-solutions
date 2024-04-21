<?php

    // Get the form data
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $repeatPassword = $_POST['pswrepeat'];
    $remember = isset($_POST['remember']) ? 'Yes' : 'No';

    // Open the CSV file, or create it if it doesn't exist
    $file = fopen('../resources/registrations.csv', 'a');

    // Write the form data to the CSV file
    fputcsv($file, [$email, $password, $remember],";");

    // Close the CSV file
    fclose($file);

    // Redirect back to the registration page (or wherever you want)
    header('Location: ../profile.php');
?>