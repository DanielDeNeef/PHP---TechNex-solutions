<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acceptCookies'])) {

        $language = $_POST['language']; // Get the selected language from the form

        setcookie('cookiesAccepted', 'true', time() + (86400 * 30), '/'); // 86400 = 1 day
        setcookie('language', $language, time() + (86400 * 30), '/');
        
        // Redirect the user back to the previous page
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>