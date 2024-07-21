<?php
include "connection.php";
$name=$_GET['name'];
$email=$_GET['email'];
$password=$_GET['pwd'];
$age=$_GET['age'];
$insertQuery = "INSERT INTO register (name, email, password, age) VALUES ('$name', '$email', '$password','$age')";

    if (mysqli_query($handler, $insertQuery)) {
        echo "Record inserted successfully.";
        header('location:login.php');
    } else {
        echo "Error: ";
    }
?>