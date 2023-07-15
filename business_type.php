<?php
	include("header.php");
	if(isset($_POST['submit']))
	{
		$cn=mysqli_connect("localhost","root","","askme");		
		$business_type = $_POST['business_type'];
		$q=mysqli_query($cn,"insert into business_type(business_type)values('$business_type')");
	}
?>
<html>
<head>
<style>
a{text-decoration:none;color:black}
.t
{
	
	color:black;
	text-align:center;
}
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
		.btn:hover
		{
			background-color: cyan;
			color: black;
			opacity: 0.8px;
		}
		.bttn
		{
			background-color: yellow;
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
		.h{
			background-color:silver;
			color:black;
			width:20px;
			text-align:center;
			font-size:25px;
		}
</style>
</head>
<body><br><br><br>
<form method="POST" action="business_type.php">
<table align="center" border="0">
	<tr>	
		<td class="abc"> Enter business_type  : </td> <td> <input type="text" name="business_type" class="xyz" required> </td>
	</tr>
	<tr>
		<td colspan="2" align="center"> <input type="submit" name="submit" value="Submit" class="btn"></td>
	</tr>
</table>
</form>
<br><br><br><br>
<h2 align="center">:: List of business_type :: </h2>
<table align="center" border="1" style="width:50%" rules=rows cellpadding=20>
	<tr style="width:50%">	
		<th class="h"> Delete </th>
		<th class="h"> ID </th> 
		<th class="h">business_type </th> 
	</tr>
<?php 
	$query = mysqli_query($cn,"select * from business_type");

	while($rec = mysqli_fetch_array($query))
	{
		echo "<tr><td class='t'><a href='delbusiness_type.php?id=".$rec[0]."'>Delete </a></td><td class='t'>".$rec[0]."</td><td  class='t'>".$rec[1]."</td></tr>";
	}

?>
</table>

</body>
</html>

<?php
	include("footer.php");
?>