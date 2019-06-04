<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>
<html>
<title>HomePage</title>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#ecf0f1">
<header>
	<h2>Welcome to Classroom Charts</h2>
</header>
	<img src="image/login-pic.png" class="logout-pic" align="right"/>

	<form class="Homepage" action="homepage.php" method="post">
		<input name="logout-btn" type="submit" id="logout-btn" value="Logout"/><br>

	</form>
	
	<h3>Welcome <?php echo $_SESSION['UserID']?></h3>	
	<?php 
		if(isset($_POST['logout-btn']))
		{
			session_destroy();	//clears all the session variables
			header('location:index.php');
		}
	?>
	<center>
	<h3>Select the Department to enter the details</h3><br>
	<div id="header">
	
	<a href=fe.php ><h2 id="H&AS">Humanities and science</h2></a></div><br>
	<div id="header">
	<a href=Comp.php><h2 id="comps">Computer Science</h2></a></div><br>
	<div id="header">
	<a href=IT.php><h2 id="IT">Information Technology</h2></a></div><br>
	<div id="header">
	<a href=Mech.php><h2 id="mech">Mechanical</h2></a>
	</div><br>
	<div id="header">
	<a href=Civil.php><h2 id="civil">CIVIL</h2></a>
	</div><br>
	<div id="header">
	<a href=Extc.php><h2>EXTC</h2></a>
	</div><br>		
	<a href=Block_details.html><h2>Click here to enter Block Details</h2></a>
	</center>

 
</body>
</html>
