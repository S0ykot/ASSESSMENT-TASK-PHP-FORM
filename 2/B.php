<!DOCTYPE html>
<html>
<head>
	<title>Task2 current page</title>
</head>
<body>

<fieldset style="width: 270px;">
	<legend><h2>EMAIL</h2></legend>
	<form method="POST" action="">
	<table border="0" width="100%">
		<tr>
			<td>
				<input type="email" name="email" autocomplete="off">
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
	</form>
</fieldset>

</body>
</html>


<?php

if (isset($_REQUEST['submit'])) {
	
	$mail = $_REQUEST['email'];

	echo "<br>Your mail is ".$mail;
}

?>