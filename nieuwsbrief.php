<!-- header  -->
<?php $pageTitle="NewsLetter" ?>
<?php include 'includes/header.php' ?>
<link rel="stylesheet" href="styles/nieuwsbrief.css">

<!-- navbar -->
<?php $currentPage = 'nieuwsbrief' ?>
<?php include 'includes/navbar.php' ?>

<form action="controllers/newsletter_ctrl.php" method="post">
    <div class="container">
        <h2>Subscribe to our Newsletter</h2>
        <p>Lorem ipsum..</p>
    </div>

    <div class="container" style="background-color:white">
        <input type="text" placeholder="Name" name="name" required>
        <input type="email" placeholder="Email address" name="mail" required>
        <label>
            <input type="checkbox" checked="checked" name="subscribe">
            Daily Newsletter
        </label>
    </div>

    <div class="container">
        <input type="submit" value="Subscribe">
    </div>
</form>


<!-- Footer -->
<?php include_once 'includes/footer.php' ?>