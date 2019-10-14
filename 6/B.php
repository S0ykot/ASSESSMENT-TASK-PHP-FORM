<html>
<head>
	<title>Task6 current page</title>
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
					<option value=""></option>
					<option value="A+">A+</option>
					<option value="A-">A-</option>
					<option value="B+">B+</option>
					<option value="B-">B-</option>
					<option value="O+">O+</option>
					<option value="O-">O-</option>
					<option value="AB+">AB+</option>
					<option value="AB-">AB-</option>
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
</fieldset>

</body>
</html>

<?php

if (isset($_REQUEST['submit'])) {
	$bGroup = $_REQUEST['blood'];

	echo "Selected Blood group is ".$bGroup;

}


?>