<?php
	include("header.php");
	echo $_GET['id'];
?>
<html>
<body>
	<form method="POST" action="updateinfoproc.php" enctype="multipart/form-data">
	<?php	
	$query = mysqli_query($cn,"select * from addinfo where id='".$_GET['id']."'");
	while($rec = mysqli_fetch_array($query))
	{ ?>
	<table align="center" border="0">
	
	<tr>
		<td><input type="hidden" name="id" value="<?php echo $rec[0]; ?>"></td>
	</tr>
	<tr>
		<td>Enter business_type: </td><td><input type="text" name="business_type" value="<?php echo $rec[1]; ?>" required ></td>			
		
	</tr>
	<tr>
		<td>Enter business_name :</td><td><input type="text"  name="business_name" value="<?php echo $rec[2]; ?>" required></td>
	</tr>

	
	<tr>
		<td>Enter mobileno	:</td><td><input type="text" name="mobileno" value="<?php echo $rec[3]; ?>" required></td>
	</tr>
	<tr>
		<td>Enter area	:</td><td><input type="text" name="area" value="<?php echo $rec[4]; ?>" required></td>
	</tr>
		<tr>
		<td>Enter city	:</td><td><input type="text" name="city" value="<?php echo $rec[5]; ?>" required></td>
	</tr>
	
	<td>Photo	:</td><td> <img src="<?php echo '../image/'.$rec[6]; ?>" height=250px width=250px> <input type="file" name="photo" value="<?php echo $rec[6]; ?>"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"> <input type="submit" name="update" value="Update">
	</tr> 
</table>
	<?php } ?>
</form>
</body>
</html>
<?php 
	include("footer.php");
?>
