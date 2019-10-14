<!DOCTYPE html>
<html>
<head>
	<title>Task1 current page</title>
</head>
<body>

<fieldset style="width:270px">
	<legend><h2>NAME</h2></legend>
	<form method="POST" action="">
	<table border="0" width="100%">
		<tr>
			<td>
				<input type="text" name="name" autocomplete="off">
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
	
	$name = $_REQUEST['name'];

	echo "Your Name is <h1>".$name."</h1>";
}

?>