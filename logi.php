<?php
include"connection.php";
session_start();
if (isset($_POST['login'])) {
	$name=$_POST['email'];
	$psw=$_POST['pwd'];
	$sql="SELECT * FROM register WHERE email='$name'AND password='$psw'";
	$run=mysqli_query($handler,$sql);
	if (mysqli_num_rows($run)==1) {
		$_SESSION['uname']=$name;
		header('location:home.php');
	}
	else
	{
		header('location:fail.php');
       
	}
}

   
?>
