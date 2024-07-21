<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $targetDirectory = "uploads/"; // Create a directory named "uploads" in the same directory as this script
    $targetFile = $targetDirectory . basename($_FILES["pdfFile"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is a PDF
    if ($fileType != "pdf") {
        echo "Only PDF files are allowed.";
        $uploadOk = 0;
    }

    // Check if the file was uploaded successfully
    if ($uploadOk == 0) {
        echo "File was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], $targetFile)) {
            echo "File uploaded successfully. <a href='download.php?filename=" . basename($targetFile) . "'>Download</a>";
        } else {
            echo "Error uploading file.";
        }
    }
}
?>
