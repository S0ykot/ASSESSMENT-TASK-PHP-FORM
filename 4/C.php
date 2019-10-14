<?php

$gen="";
$full="";

if (isset($_REQUEST['submit'])) {
	$gen = $_REQUEST['gender'];
	$full = "Selected gender is ".$gen;
}

?>

<html>
<head>
	<title>Task4 current page with value</title>
</head>
<body>

<fieldset style="width:270px">
	<legend><h2>GENDER</h2></legend>
	<form method="POST" action="">
	<center>
	<table border="0" width="100%">
		<tr>
			<td>
				<input type="radio" name="gender" value="Male" <?php if ($gen=='Male') {echo "checked";} ?>>Male <input type="radio" name="gender" value="Female" <?php if ($gen=='Female') {echo "checked";} ?>>Female <input type="radio" name="gender" value="Other" <?php if ($gen=='Other') {echo "checked";} ?>>Other
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
