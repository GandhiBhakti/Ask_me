<?php
	include("header.php");
	$id = $_GET['id'];
	$q=mysqli_query($cn,"Delete from feedback where id=$id");	
	echo "<script> alert('Feedback Deleted Successfully....')</script>";
?>