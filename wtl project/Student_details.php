<?php
	session_start();
	require 'dbconfig/config.php';
?>
<html>
<title>Student_details</title> 
<head>
<link rel="stylesheet" href="css/style.css">


</head>
<body>
<header>
	<h2>Welcome to Classroom Charts</h2>
</header><br>
<center>
<br><h3>Enter the detailed list of the Students appearing for the exams....</h3><br>
<form action="Student_details.php" method="post" enctype="multipart/form-data">



<lable>Upload the Students list:</label>
<input name="Student_details" type="file" reqiured /><br>

<br><br>
<input type="submit" name="update_students" value="Update Students list">

<?php
		if(isset($_POST['update_students']))
		{
			//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';
			//$file = $_FILES['Student_details']['tmp_name'];
			$query= "LOAD DATA LOCAL INFILE '/home/jayesh/Desktop/test.csv' INTO TABLE Student FIELDS TERMINATED BY ',' LINES TERMINATED BY '\n' IGNORE 1 LINES";
			$query_run = mysqli_query($con,$query); 
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("Student Details Updated Successfully...!!") </script>';
				header('location:homepage.php');
				
			}
			else
			{
				echo '<script type="text/javascript"> alert("Error occured...!! Please give a valid Entry") </script>';
			} 
		}
					
?>

</form>
</body>
</html>
