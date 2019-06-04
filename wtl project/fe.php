<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>
<html>
<title>FE</title>
<head>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
	<h2>Welcome to Classroom Charts</h2>
</header><br>
<center>
<form action="Student_details.php" method="post">
<table border="0">
<tr>
<td>Subject_ID:</td>
<td><input name="Subject-ID" type="text" size="30" required /></td> </tr>
<tr>
<td> Examination:</td>
<td><select name="Examination">
    <option value="Unit Test I">Unit Test I</option>
    <option value="Unit Test II">Unit Test II</option>
    <option value="Semester I">Semester I</option>
    <option value="Semester II">Semester II</option>
  </select>
</td></tr>
<tr>
<td>Year:</td>
<td><input name="Year" type="number" size="30" required /></td> </tr>
<tr>
<td>Month:</td>
<td><select name="Month">
    <option value="NOV-DEC">NOV-DEC</option>
    <option value="MAY-JUNE">MAY-JUNE</option>
  </select>
</td></tr>
<tr>
<td>Time:</td>
<td><input name="Time" type="text" size="30" required /></td> </tr>
<tr>
<td>Date of Examination:</td>
<td><input name="Examdate" type="date" placeholder="yyyy-mm-dd" required /></td> </tr>

</table><br><br>
<input type="submit" name="Exam-details">
</form>
<?php
		if(isset($_POST['Exam-details']))
		{
			//echo '<script type="text/javascript"> alert("Sign Up button clicked") </script>';

			$Subject_ID = $_POST['Subject-ID'];
			$Semester = $_POST['Examination'];
			$Department = "First Year";
			$Year = $_POST['Year'];
			$Month = $_POST['Month'];
			$Time = $_POST['Time'];
			$Exam_date = $_POST['Examdate'];
			$query= "INSERT INTO Examination VALUES ('$Subject_ID','$Semester','$Department','$Year','$Month','$Time', '$Exam_date')";
			$query_run = mysqli_query($con,$query); 
			if($query_run)
			{
				echo '<script type="text/javascript"> alert("Exam Details Updated Successfully...!!") </script>';
			}
			else
			{
				echo '<script type="text/javascript"> alert("Error occured...!! Please give a valid Entry") </script>';
			}
		}
					
?>

</body>
</html>
