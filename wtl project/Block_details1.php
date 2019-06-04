<?php
	session_start();
	require 'dbconfig/config.php';
?>
<html>
<title>Block_Details</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#ecf0f1">
<header>
	<h2>Blocks Management Section</h2>
</header>
<br>
<br><center><form action="Block_details1.php" method="POST">
<?php
	$query= "INSERT INTO Block (Block_No, Capacity, No_of_Rows) VALUES";
	for($i=0;$i<$_POST['Avail_Blocks'];$i++)
	{
		$query .="('".$_POST['Block_No'][$i]."','".$_POST['Capacity'][$i]."','".$_POST['No_of_Rows'][$i]."'),";
	}
	
	
	$query = rtrim($query,",");  //library function to trim a query(here to remove a comma)
	
	$query_run = mysqli_query($con,$query); 
	if($query_run)
	{
		echo '<script type="text/javascript"> alert("Block Details Updated Successfully...!!") </script>';
		echo "All Set To Allocate Students to blocks";
	?>
		<br><br><input type="button" value="Click here to Allocate Students To Blocks" name="Allocate" />
		
	 	<?php
	 	if(isset($_POST['Allocate']))
		{
				
		}
	}
	else
	{
		echo mysqli_error();
	}
	mysqli_close($con);
?>
</form>
</center>
</body>
</html>
