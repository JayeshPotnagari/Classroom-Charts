<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE HTML>
<html>
<title>Block_Details</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#ecf0f1">
<header>
	<h2>Blocks Management Section</h2>
</header>
<br>
<br><center>
<h4>Enter Details of Each Block</h4>
<table border="1" cellpadding="5" cellspacing="5">
<form action="Block_details1.php" method="post" enctype="multipart/form-data" >
<?php
$Avail_Blocks=$_POST['Avail_Blocks'];
for($i=0;$i<$Avail_Blocks;$i++)
{
?>
<tr>
<td colspan=6>Block #<?php echo $i+1; ?></td>
</tr>
<input type="hidden" value="<?php echo $Avail_Blocks;?>" name="Avail_Blocks" />
<tr>
<td><?php echo $i+1; ?>) Enter Block No:</td>
<td><input name="Block_No[]" type="number" size="30" required /></td> &nbsp;<td>Enter Block Capacity:</td>
<td><input name="Capacity[]" type="number" size="30" required /></td> &nbsp; <td>Enter Number of Rows:</td>
<td><input name="No_of_Rows[]" type="number" size="30" required /></td>
</tr>

<?php
 }
?> 
<tr>
<td><input type="submit" value="Update Available Blocks" name="update" /></td>
</tr>

</form>
</table>
</center>
</body>
</html>


	

