<?php

    $target_dir = "../resources/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $fileType = pathinfo($target_file,PATHINFO_EXTENSION);
    $fileName = pathinfo($target_file,PATHINFO_FILENAME);

    if($fileType != "csv") {
        echo json_encode(array("status" => "error", "message" => "File is not CSV"));
    } else if($fileName != "prices") {
        echo json_encode(array("status" => "error", "message" => "Wrong file name"));
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo json_encode(array("status" => "success", "message" => "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded."));
        } else {
            echo json_encode(array("status" => "error", "message" => "Sorry, there was an error uploading your file."));
        }
    }    
?>
