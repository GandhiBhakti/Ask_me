<?php
	include("header.php");
?>
<html>
<body><br><br><br>
<h2 align="center">:: Feedback to our site :: </h2>
<table align="center" border="1" style="width:50%">
	<tr style="width:50%">	
		<th style="width:15%;text-align:center"> Delete </th>
		<th style="width:10%;text-align:center"> ID </th> 
		<th style="width:15%;text-align:center"> name</th> 
		<th style="width:20%;text-align:center"> mno</th>
		<th style="width:40%;text-align:center"> feedback</th>
	</tr>
<?php 
	$query = mysqli_query($cn,"select * from feedback");

	while($rec = mysqli_fetch_array($query))
	{
		echo "<tr><td style='width:15%' align='center'><a href='delfeedback.php?id=".$rec[0]."'>Delete </a></td><td style='width:10%' align='center'>".$rec[0]."</td><td style='width:15%' align='center'>".$rec[1]."</td><td style='width:20%' align='center'>".$rec[2]."</td><td style='width:40%' align='center'>".$rec[3]."</td></tr>";
	}

?>
</table>

</body>
</html>

<?php
	include("footer.php");
?>