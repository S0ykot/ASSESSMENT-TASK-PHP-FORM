<html>
<head>
	<title>Task3 current page</title>
</head>
<body>

<fieldset style="width: 270px;">
	<legend><h2>DATE OF BIRTH</h2></legend>
	<form method="POST" action="">
	<table border="0" width="100%">
		<tr>
			<td><p align="center">dd</p></td>
			<td colspan="2"><p align="center">mm</p></td>
			<td colspan="2"><p align="center">yyyy</p></td>
		</tr>
		<tr>
			<td><input type="text" name="day" autocomplete="off" maxlength="2" size="6"></td>
			<td align="left">/</td>
			<td><input type="text" name="month" autocomplete="off" maxlength="2" size="6"></td>
			<td align="center">/</td>
			<td><input type="text" name="year" autocomplete="off" maxlength="4" size="6"></td>
		</tr>
		<tr>
			<td colspan="5"><hr></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
	</form>
</fieldset>
</body>
</html>
<?php

if (isset($_REQUEST['submit'])) {
	$day = $_REQUEST['day'];
	$month = $_REQUEST['month'];
	$year = $_REQUEST['year'];

	echo "<br>".$day."/".$month."/".$year;
}


?>