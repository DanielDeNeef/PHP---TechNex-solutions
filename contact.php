<!-- header  -->
<?php $pageTitle="Contact" ?>
<?php include 'includes/header.php' ?>
<link rel="stylesheet" href="styles/contact.css">

<!-- navbar -->
<?php $currentPage = 'contact' ?>
<?php include 'includes/navbar.php' ?>

<!-- content -->
<div class="content_wrapper">
    <div style="height:auto; width:90%; margin:auto; background-color: #b5b5b5e7;">
        <h2 style="font-size: 40px; text-align:center">Contact</h2>

        <div class="container">
            <form action="action_page.php" method="post">
                <label for="fname">Voornaam</label>
                <input type="text" id="fname" name="firstname" placeholder="Uw voornaam..">
                <label for="lname">Naam</label>
                <input type="text" id="lname" name="lastname" placeholder="Uw naam..">
                <label for="country">Land</label>
                <select id="country" name="country">
                    <option value="" selected></option>
                    <option value="Beglië">Beglië</option>
                    <option value="Frankrijk">Frankrijk</option>
                    <option value="Nederland">Nederland</option>
                </select>
                <label for="subject">onderwerp</label>
                <textarea id="subject" name="subject" placeholder="Beschrijf uw onderwerp.." style="height:200px"></textarea>
                <input type="submit" value="Indienen">
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include_once 'includes/footer.php' ?>