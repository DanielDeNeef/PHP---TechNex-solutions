<!-- header  -->
<?php $pageTitle="Registration" ?>
<?php include 'includes/header.php' ?>

<!-- navbar -->
<?php $currentPage = 'registration' ?>
<?php include 'includes/navbar.php' ?>

<div style="margin : 20px;">
    <?php
    echo "<h1>Ingevoerde gegevens</h1>";
    foreach ($_POST as $key => $value) {
        echo "<b>" . ($key) . "</b>: " . ($value) . "<br>";
    }
    ?>
    <br>
    <button onclick="window.history.back()">Ga Terug</button>
</div>


<!-- Footer -->
<?php include_once 'includes/footer.php' ?>
