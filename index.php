<?php
	
	include("header.php");
?>

	<html>
		<head>
			<title>User</title>
<style>
	a{text-decoration:none;color:black}
.t
{
	
	color:black;
	text-align:center;
	border:2px pool ;
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
			width: 240px;
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
		width: 300px;
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
		.h{
			background-color:silver;
			color:black;
			width:20px;
			text-align:center;
			font-size:25px;
		}
</style>
		</head>
		</body><br><br><br>
	</html>
<?php
		$q = mysqli_query($cn,"select * from register");
		?>

<h2 align="center">:: List of User :: </h2>
<table align="center" border="1" style="width:50%"  rules=rows>
	<tr style="width:50%">	
		<th class=h> Delete </th>
		<th class=h> ID </th> 
		<th class=h> Name </th>
		<th class=h> Mobile Number </th>
		<th class=h>Email</th>
		<th class=h>Password </th> 
	</tr>
<?php 
	$query = mysqli_query($cn,"select * from register");

	while($rec = mysqli_fetch_array($query))
	{
		echo "<tr><td class=t><a href='deluser.php?id=".$rec[0]."'>Delete </a></td><td class=t>".$rec[0]."</td><td class=t>".$rec[1]."</td>
			<td class=t>".$rec[2]."</td><td class=t>".$rec[3]."</td><td class=t>".$rec[4]."</td></tr>";
	}

?>
</table>

	