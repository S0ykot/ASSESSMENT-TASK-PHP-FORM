<html>
<head>
	<title>Task4 current page</title>
</head>
<body>

<fieldset style="width:270px">
	<legend><h2>GENDER</h2></legend>
	<form method="POST" action="">
	<center>
	<table border="0" width="100%">
		<tr>
			<td>
				<input type="radio" name="gender" value="Male">Male <input type="radio" name="gender" value="Female">Female <input type="radio" name="gender" value="Other">Other
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
	$gen = $_REQUEST['gender'];

	echo "Select gender is ".$gen;
}

?>