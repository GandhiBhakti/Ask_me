<?php
	
	$cn=mysqli_connect("localhost","root","","askme");
	
	/* if(!isset($_SESSION['adminname']))
	{
 		header('location:../login.php');
	} */
?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
              			<meta name="viewport" content="width=device-width, initial-scale=1">
          
              			<link rel="stylesheet" href=
          			"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
              
              			<script src=
          			"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
              			</script>
              
              			<script src=
          			"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
              			</script>
              
              			<script src=
          			"https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
              			</script>
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
			</script>
		<link rel="stylesheet" href="style.css">
		</head>

		<body>
			<nav class="navbar navbar-expand-sm fixed-top navbar-light" style="background-color:  #4C489D;">
			
			<a href="#" class="navbar-brand" style="color:white;">Ask me</a>
			<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="myMenu">
			<ul class="navbar-nav ml-auto">
					

				
				<li class="nav-item">
					<a class="nav-link" href="index.php" style="color:black;"><b>User</b></a>
             				</li>   
				<li class="nav-item">
					<a class="nav-link" href="city.php" style="color:black;"><b>City</b></a>
				</li>	
			
				<li class="nav-item">
					<a class="nav-link" href="business_type.php" style="color:black;"><b>Business Type</b></a>
				</li>	
				<li class="nav-item">
					<a class="nav-link" href="addinfo.php" style="color:black;"><b>Add Info</b></a>
				</li>	
				<li class="nav-item">
					<a class="nav-link" href="feedback.php" style="color:black;"><b>Feedback</b></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="logout.php" style="color:black;"><b>Logout</b></a>
				</li>
			</ul>
			</div>
			</nav>
		</body>
	</html>




