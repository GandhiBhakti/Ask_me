<?php
	include("header.php");
	if(isset($_POST['update']))
	{
		$id=$_POST['id'];
		$business_type = $_POST['business_type'];
		$business_name = $_POST['business_name'];
		$mobileno = $_POST['mobileno'];
		$city = $_POST['city'];
		$area = $_POST['area'];
		if($_FILES['photo']['size'] != 0)
		{
			$photo = $_FILES['photo']['name'];
		 	echo $id.$business_type.$business_name.$mobileno.$city.$area.$photo; 
			move_uploaded_file($_FILES['photo']['name'],"../image/".$_FILES['photo']['name']);
			$q=mysqli_query($cn,"UPDATE  addinfo SET business_type='$business_type', business_name='$business_name', mobileno='$mobileno',city='$city',Area='$area', photo='$photo' WHERE  id='$id'");
		}
		else
		{
			$q=mysqli_query($cn,"UPDATE  addinfo SET business_type='$business_type', business_name='$business_name', mobileno='$mobileno',city='$city',Area='$area' WHERE  id='$id'");
		}
		echo "<script> alert('info Update Successfully....')</script>";
	}	
	echo "<script>document.location='addinfo.php'</script>";
?>