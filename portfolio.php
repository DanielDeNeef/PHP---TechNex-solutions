<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/content.css">
</head>

<body>
    <!-- header  -->
    <?php include 'includes/header.php' ?>
    
    <!-- navbar -->
    <?php $currentPage = 'portfolio' ?>
    <?php include 'includes/navbar.php' ?>

    <!-- content -->
    <div class="content_wrapper">
        <div style="height:400px; width:90%; margin:auto; background-color: #b5b5b5e7;">
            <h2 style="font-size: 40px; text-align:center">Portfolio</h2>
        </div>
    </div>

    <?php include_once 'includes/footer.php' ?>
</body>

</html>