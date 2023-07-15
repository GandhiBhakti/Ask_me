<?php
	include("header.php");
	if(isset($_POST['submit']))
	{
		$cn=mysqli_connect("localhost","root","","askme");			
		$business_type = $_POST['business_type'];
		$business_name = $_POST['business_name'];

		$mobileno = $_POST['mobileno'];
	
		$address = $_POST['area'];
	
		$city = $_POST['city'];

		$photo=$_POST['photo'];
		if (empty($_FILES['photo']['name']))
		{		
			$q=mysqli_query($cn,"insert into addinfo(business_type,business_name,mobileno,area,city,photo) values ('$business_type','$business_name','$mobileno','$area','$city','default.jpg')");
		}
		else
		{					
			$filename = $_FILES['photo']['name'];
			$tempname = $_FILES['photo']['tmp_name'];    
			$folder = "../image/".$filename;		
			move_uploaded_file($tempname, $folder);
			$q=mysqli_query($cn,"insert into addinfo(business_type,business_name,mobileno,area,city,photo) values ('$business_type','$business_name','$mobileno','$area','$city','$filename')");
		}	
	}
?>
<html>
<head>
<style>
.abc{
		background-color: black;
			color: white;
			padding: 15px 32px;
			text-align: center;
			display: inline-block;
			margin: 4px 2px;
			cursor: pointer;
			font-size: 20px;
			width: 300px;
			border-radius: 15px;
			border-size: 2px;
		
			font-weight: bolder;
		}
		.xyz{
		background-color: white;
		color: black;
		padding: 15px 32px;
		text-align: center;
		display: inline-block;
		margin: 4px 2px;
		cursor: pointer;
		font-size: 25px;
		width: 350px;
		border-radius: 15px;
		border-size: 2px;
		}
		.btn
		{
			background-color: black;
			color: white;
			padding: 10px 22px;
			text-align: center;
			display: inline-block;
			margin: 4px 2px;
			cursor: pointer;
			font-size: 17px;
			width: 200px;
			border-radius: 15px;
			border-size: 2px;
			
			font-weight: bolder;
		}
		.bttn
		{
			background-color: black;
			color: white;
			padding: 10px 22px;
			text-align: center;
			display: inline-block;
			margin: 4px 2px;
			cursor: pointer;
			font-size: 17px;
			width: 300px;
			border-radius: 15px;
			border-size: 2px;
			
			font-weight: bolder;
		}
		.btn:hover
		{
			background-color: cyan;
			color: black;
			opacity: 0.8px;
		}

</style>
</head>
<body><br><br><br>

<form method="POST" action="addinfo.php" enctype="multipart/form-data">
<table align="center" border="0">
<tr>
	<td class="abc">Enter business_type: </td><td><input type="text" name="business_type" class="xyz" required></td>
</tr>
<tr>
	<td class="abc">Enter business_name :</td><td><input type="text" name="business_name" class="xyz" required></td>
</tr>

<tr>
	<td class="abc">Enter mobileno	:</td><td><input type="text" name="mobileno" class="xyz" required></td>
</tr>

<tr>
	<td class="abc">Enter area	:</td><td><input type="text" name="area" class="xyz" required></td>
</tr>
<tr>
	<td class="abc">Enter city	:</td><td><input type="text" name="city" class="xyz" required></td>
</tr>
<tr>
   	 <td class="abc">upload photo	:</td> <td><input type="file" name="photo" class="bttn"></td>
	
</tr>


<tr>
	<td colspan="2" align="center"> <input type="submit" name="submit" value="Submit" class="btn"></td>
</tr>



</table>
</form>
<br><br><br><br>
<h2 align="center">:: Add Info to our site :: </h2>
<table align="center" border="1" style="width:100%">
	<tr style="width:100%">	
		<th style="width:5%;text-align:center"> Delete </th>
		<th style="width:5%;text-align:center"> Edit </th>
		<th style="width:10%;text-align:center"> ID </th> 
		<th style="width:10%;text-align:center"> Business type </th> 
		<th style="width:10%;text-align:center"> Business name</th>
		<th style="width:10%;text-align:center"> mobileno</th>
		<th style="width:10%;text-align:center"> area</th>
		<th style="width:10%;text-align:center"> city</th>
		<th style="width:10%;text-align:center"> Photo</th>
	</tr>
<?php 
	$query = mysqli_query($cn,"select * from addinfo");

	while($rec = mysqli_fetch_array($query))
	{
		echo "<tr><td style='width:5%' align='center'><a href='deladdinfo.php?id=".$rec[0]."'>Delete </a></td><td style='width:5%' align='center'><a href='updateinfo.php?id=$rec[0]'>Edit</a></td><td style='width:10%' align='center'>".$rec[0]."</td><td style='width:10%' align='center'>".$rec[1]."</td><td style='width:15%' align='center'>".$rec[2]."</td><td style='width:10%' align='center'>".$rec[3]."</td><td style='width:15%' align='center'>".$rec[4]."</td><td style='width:10%' align='center'>".$rec[5]."</td><td style='width:10%' align='center'>".$rec[6]."</td>";
	}

?>
</table>




</body>
</html>

<?php
	include("footer.php");
?>


