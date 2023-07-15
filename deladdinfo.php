<?php
	include("header.php");
	$id = $_GET['id'];
	$q=mysqli_query($cn,"Delete from addinfo where id=$id");	
	echo "<script> alert('info Deleted Successfully....')</script>";
?>