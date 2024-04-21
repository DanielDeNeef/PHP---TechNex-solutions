<!-- header  -->
<?php $pageTitle="Registration" ?>
<?php include 'includes/header.php' ?>
<link rel="stylesheet" href="styles/registration.css">

<!-- navbar -->
<?php $currentPage = 'registration' ?>
<?php include 'includes/navbar.php' ?>

<form action="controllers/registration_ctrl.php" style="border:1px solid #ccc" method="post">
    <div class="container">
        <h1>Sign Up</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="pswrepeat" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
</form>

<!-- Footer -->
<?php include_once 'includes/footer.php' ?>