<?php
function showToastMessage($type, $message) {
    echo "
    <link rel='stylesheet' type='text/css' href='styles/toast.css'>
    <div id='toast'></div>
    <script src='js/toast.js'></script>
    <script>
        showToastMessage('$type', '$message');
    </script>
    ";
}
?>
