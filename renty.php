<?php
include "connection.php";
$uname=$_POST['uname'];
$phone=$_POST['phone'];
$date=$_POST['date'];
$days=$_POST['day'];
$file=$_POST['image'];
$code=$_POST['code'];
if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
   // $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
    
    //$extensions= array("jpeg","jpg","png");
    
   // if(in_array($file_ext,$extensions)=== false){
      // $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    //}
    
    if($file_size > 2097152){
       $errors[]='File size must be excately 2 MB';
    }
    
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"images/".$file_name);
       echo 'success';
    }
    else{
       print_r($errors);
    }
 }
$insertQuery = "INSERT INTO book (uname, phone, startDate, days,code) VALUES ('$uname', '$phone', '$date','$days','$code')";

    if (mysqli_query($handler, $insertQuery)) {
        echo "Record inserted successfully.";
        header('location:success.php');
    } else {
        echo "Error: ";
    }
    ?>
