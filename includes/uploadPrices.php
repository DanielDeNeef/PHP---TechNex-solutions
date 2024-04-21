
<link rel="stylesheet" href="styles/uploadPrices.css">

<section class="upload-section">
    <h2>Upload Prices</h2>
    <p>Please upload a CSV file named "prices.csv".</p>
    <form action="controllers/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload CSV" name="submit" class="upload-button">
    </form>
    <div id="progressBar"><div></div></div>
</section>

<script src="js/uploadPrices.js"