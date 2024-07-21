<?php
include "connection.php";

$email=$_GET['email'];
$message=$_GET['text'];

$insertQuery = "INSERT INTO contact (email, message) VALUES ('$email','$message')";

    if (mysqli_query($handler, $insertQuery)) {
        echo "Record inserted successfully.";
        header('location:about.php');
    } else {
        echo "Error: ";
    }
?>