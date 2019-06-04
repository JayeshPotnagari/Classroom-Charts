<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>
<html>
<title>Classroom Charts</title>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<img src="image/login-pic.png" class="logout-pic" align="right"/>

	<center>
	<header>
		<h2>Welcome to the Examination Seating arrangement module</h2>
	</header><br>
	<form class="Homepage" action="homepage.php" method="post">
	<a href="login.php"><input type="button" id="logout-btn" value="Login"/></a>
<img src="image/index.jpg"><br><br>
<lable><b>Enter Your Seat Number:</b></lable><br><br>
<input type="text" placeholder="Enter Seat No." required>
<br><br>
<input type="submit" value="Check your seat Allocation"><br>

	</form>
	
	</center>
	

 
</body>
</html>
