
<?php
$full="";
$bGroup="";
if (isset($_REQUEST['submit'])) {
	
	if (empty($_REQUEST['blood'])) {
	echo "<script>alert('Select your Blood group');</script>";
}

else
{
	$bGroup = $_REQUEST['blood'];
	$full= "Selected Blood group is ".$bGroup;
}

}


?>



<html>
<head>
	<title>Task6 current page with selected value</title>
</head>
<body>

<fieldset style="width:270px">
	<legend><h2>BLOOD GROUP</h2></legend>
	<form method="POST" action="">
	<center>
	<table border="0" width="100%">
		<tr>
			<td>
				<select name="blood">
					<option value="" <?php if($bGroup==''){echo "selected";} ?>></option>
					<option value="A+" <?php if($bGroup=='A+'){echo "selected";} ?>>A+</option>
					<option value="A-" <?php if($bGroup=='A-'){echo "selected";} ?>>A-</option>
					<option value="B+" <?php if($bGroup=='B+'){echo "selected";} ?>>B+</option>
					<option value="B-" <?php if($bGroup=='B-'){echo "selected";} ?>>B-</option>
					<option value="O+" <?php if($bGroup=='O+'){echo "selected";} ?>>O+</option>
					<option value="O-" <?php if($bGroup=='O-'){echo "selected";} ?>>O-</option>
					<option value="AB+" <?php if($bGroup=='AB+'){echo "selected";} ?>>AB+</option>
					<option value="AB-" <?php if($bGroup=='AB-'){echo "selected";} ?>>AB-</option>
				</select>
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
	<p><?php echo $full; ?></p>
</fieldset>

</body>
</html>