
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if file was uploaded without errors
    if (isset($_FILES["upload"]) && $_FILES["upload"]["error"] == 0) {

        // folder for file to be uploaded
        $destination = "";

        //basement the name of the file from the specified path and $_files function stores uploaded item as an associative array
        $fileName = basename($_FILES["upload"]["name"]);

        // displaying name of the file 
        // echo $fileName;

        // Check if file already exists
        if (file_exists($fileName)) {
            echo "Sorry! This file already exists in the current folder";
        } else {

            // move_uploaded_file function for moving file to the destination path
            if (move_uploaded_file($_FILES["upload"]["tmp_name"], $fileName)) {
                echo basename($_FILES["upload"]["name"]) . " has been saved to the destination folder.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Error: " . $_FILES["upload"]["error"];  //handling errors
    }
}
























/*
$targetDirectory = ""; // Specify the directory where uploaded files will be saved
$targetFile = basename($_FILES["upload"]["name"]); // Get the path of the uploaded file

// echo $_FILES["upload"];
// echo $_FILES["upload"]["name"];   //
echo $targetFile;    //show file name
// echo basename($targetFile,".jpg");   // show filename but cut off file extension for jpg files

// Check if the file has been uploaded
if(isset($_POST["submit"])) {
    $uploadOk = 1;

    // Check if the file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size (optional)
    // if ($_FILES["upload"]["size"] > 500000) {
    //     echo "Sorry, your file is too large.";
    //     $uploadOk = 0;
    // }

    // Allow only certain file formats (optional)
    $allowedFormats = array("jpg", "jpeg", "png", "gif");
    $fileFormat = strtolower(pathinfo($targetFile,PATHINFO_EXTENSION));
    if(!in_array($fileFormat, $allowedFormats)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Attempt to move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["upload"]["tmp_name"], $targetFile)) {
            echo "The file ". basename( $_FILES["upload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

*/

?>