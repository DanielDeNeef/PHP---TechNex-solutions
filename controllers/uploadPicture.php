<?php
    $target_dir = "../resources/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo json_encode(array("status" => "error", "message" => "Sorry, only JPG, JPEG, PNG & GIF files are allowed."));
        exit();
    }

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo json_encode(array("status" => "success", "message" => "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded."));
    } else {
        echo json_encode(array("status" => "error", "message" => "Sorry, there was an error uploading your file."));
    }
?>
