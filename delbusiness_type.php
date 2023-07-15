<?php
	include("header.php");
	$id = $_GET['id'];
	$q=mysqli_query($cn,"Delete from business_type where id=$id");	
	echo "<script> alert('business_type Deleted Successfully....')</script>";
?>