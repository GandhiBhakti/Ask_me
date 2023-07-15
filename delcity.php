<?php
	include("header.php");
	$id = $_GET['id'];
	$q=mysqli_query($cn,"Delete from city where id=$id");	
	echo "<script> alert('City Deleted Successfully....')</script>";
	echo "<script>document.location='city.php'</script>";
?>