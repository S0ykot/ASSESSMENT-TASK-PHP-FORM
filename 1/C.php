<?php

$name="";
$full="";
if (isset($_REQUEST['submit'])) {
	
	if (empty($_REQUEST['name'])) {
		echo "<script>alert('Input a name');</script>";
	}
	else
	{
		$name = $_REQUEST['name'];
		$full = "Your name is ".$name;
	}
}

?>

<html>
<head>
	<title>Task1 current page with current value</title>
</head>
<body>

<fieldset style="width:270px">
	<legend><h2>NAME</h2></legend>
	<form method="POST" action="">
	<center>
	<table border="0" width="100%">
		<tr>
			<td>
				<input type="text" name="name" autocomplete="off" value="<?php echo $name; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<hr>
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit">
			</td>
		</tr>
	</table>
	</center>
	</form>
	<?php echo $full; ?>
</fieldset>

</body>
</html>
