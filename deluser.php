<?php
	include("header.php");
	$id = $_GET['id'];
	$q=mysqli_query($cn,"Delete from register where id=$id");	
	echo "<script> alert('User Deleted Successfully....')</script>";
	echo "<script>document.location='index.php'</script>";
?>