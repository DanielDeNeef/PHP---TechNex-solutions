<!-- header  -->
<?php $pageTitle="Login" ?>
<?php include 'includes/header.php' ?>
<link rel="stylesheet" href="styles/login.css">

<!-- navbar -->
<?php $currentPage = 'login' ?>
<?php include 'includes/navbar.php' ?>

<h3>Login</h3>
<form action="action_page.php" method="post">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember">
            Remember me</label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>


<!-- Footer -->
<?php include_once 'includes/footer.php' ?>