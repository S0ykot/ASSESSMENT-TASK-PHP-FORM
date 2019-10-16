<?php

$day="";
$month="";
$year="";
$full="";

if (isset($_REQUEST['submit'])) {
	
	if (empty($_REQUEST['day']) OR empty($_REQUEST['month']) OR empty($_REQUEST['year'])) {
	echo "<script>alert('Blank input found');</script>";
}
else
{
	if ($_REQUEST['day']<=31 AND $_REQUEST['month']<=12 AND $_REQUEST['year']<2020) {
		$day = $_REQUEST['day'];
		$month = $_REQUEST['month'];
		$year = $_REQUEST['year'];
		$full =  "<br>".$day."/".$month."/".$year;
	}
	else
	{
		echo "<script>alert('Wrong input');</script>";
	}
}
}

?>



<html>
<head>
	<title>Task3 current page with current value</title>
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
			<td><input type="text" name="day" autocomplete="off" maxlength="2" size="6" value="<?php echo $day; ?>"></td>
			<td align="left">/</td>
			<td><input type="text" name="month" autocomplete="off" maxlength="2" size="6" value="<?php echo $month; ?>"></td>
			<td align="center">/</td>
			<td><input type="text" name="year" autocomplete="off" maxlength="4" size="6" value="<?php echo $year; ?>"></td>
		</tr>
		<tr>
			<td colspan="5"><hr></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit"></td>
		</tr>
	</table>
	</form>
	<p><?php echo $full; ?></p>
</fieldset>
</body>
</html>