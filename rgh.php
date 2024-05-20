<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["fileToUpload"]) && $_FILES["fileToUpload"]["error"] == 0) {
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
        } else {
            // Upload the file
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Error: " . $_FILES["fileToUpload"]["error"];
    }
}
?>
