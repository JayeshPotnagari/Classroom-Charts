<?php
	require 'dbconfig/config.php';

?>
<!DOCTYPE HTML>
<html>
<title>Registration Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#34495e">
<header>
	<h2>Welcome to the Examination Seating arrangement module</h2>
</header><br>
	<div id="main-wrapper">
		<center>
			<h2>Faculty Registration</h2>
			<img src="image/login-pic.png" class="login-pic"/> 
		</center>
	
		<form class="register-form" action="register.php"method="post">
		<label><b>UserID:</b></label><br>
		<input name="UserID" type="text" class="inputvalues" placeholder="Type your UserID" required/><br>
		<label><b>Password:</b></label><br>
		<input name="password" type="password" class="inputvalues" placeholder="Type your Password" required/><br>
		<label><b>Confirm Password:</b></label><br>
		<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm Password"/ required><br>
		<input name="submit-btn" type="submit" id="signup-btn" value="Register Yourself"/><br>
		<a href="login.php"><input type="button" id="back-btn" value="Back to login page"/></a><br>
	</form>
	<?php
		if(isset($_POST['submit-btn']))
		{
			//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';

			$UserID = $_POST['UserID'];
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			
			if($password==$cpassword)
			{
				$query= "select * from user WHERE UserID='$UserID'";		//Query for Checking whether userid already exists
				$query_run = mysqli_query($con,$query);	//mysqli_query() function is used to run the query in db and the result is stored in $query_run variable
				if(mysqli_num_rows($query_run)>0)		//this function checks if any similar result is present or not
				{
					//if there is already a user wih the same userid
					echo '<script type="text/javascript"> alert("User already exists...!! Try another UserID.") </script>';
				}
				else
				{
					$query= "insert into user values('$UserID','$password')";
					$query_run= mysqli_query($con,$query);
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("You have Registered Successfully...!!") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error occured...!!") </script>';
					}
				}
			}
			else
			{
				echo '<script type="text/javascript"> alert("Both the passwords did not match..Try again..!!") </script>';
			}
		}
	
	?>
	</div>	
	


 
</body>
</html>
