<link rel="stylesheet" href="styles/navbar.css">

<div class="nav">
    <!-- Left nav items -->
    <a href="index.php" <?php if($currentPage == "home"){ echo 'class="nav-active"';} ?>>Home</a>
    <a href="wie-zijn-we.php" <?php if($currentPage == "about"){ echo 'class="nav-active"';} ?>>Wie zijn we?</a>
    <a href="diensten.php" <?php if($currentPage == "diensten"){ echo 'class="nav-active"';} ?>>Diensten</a>
    <a href="prijs.php" <?php if($currentPage == "prijs"){ echo 'class="nav-active"';} ?>>Prijs</a>
    <a href="portfolio.php" <?php if($currentPage == "portfolio"){ echo 'class="nav-active"';} ?>>Portfolio</a>
    <!-- Right nav items -->
    <a href="profile.php" class='<?php echo $currentPage == "profile" ? "nav-right nav-active" : "nav-right"; ?>'>Profile</a>
    <a href="faq.php" class= '<?php echo $currentPage == "faq" ? "nav-right nav-active" : "nav-right"; ?>'>FAQ</a>
    <a href="contact.php" class= '<?php echo $currentPage == "contact" ? "nav-right nav-active" : "nav-right"; ?>'>Contact</a>
    <a href="vestigingen.php" class= '<?php echo $currentPage == "vestigingen" ? "nav-right nav-active" : "nav-right"; ?>'>Vestigingen</a>
</div>




