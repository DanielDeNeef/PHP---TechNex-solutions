<link rel="stylesheet" href="styles/upload.css">

<section class="upload-section">
    <h2>Upload Picture</h2>
    <p>Please upload a Picture file.</p>
    <form action="controllers/uploadPicture.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit" class="upload-button">
    </form>
    <div id="progressBar"><div>
</section>


<script src="js/uploadProgress.js"></script>