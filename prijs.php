<!-- header  -->
<?php $pageTitle = 'Prijs' ?>
<?php include 'includes/header.php' ?>

<!-- navbar -->
<?php $currentPage = 'prijs' ?>
<?php include 'includes/navbar.php' ?>

<!-- content -->
<div class="content_wrapper">
    <div style="height:auto; width:90%; margin:auto; background-color: #b5b5b5e7;">
        <h2 style="font-size: 40px; text-align:center">Prijs</h2>

        <!-- Comparison table -->
        <?php include 'includes/comparisonTable.php' ?>
        <!-- Price table -->
        <?php include 'includes/priceTable.php' ?>
    </div>
</div>

<?php include_once 'includes/footer.php' ?>