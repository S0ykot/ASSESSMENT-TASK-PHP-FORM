<html>
<head>
	<title>Task5 current page</title>
</head>
<body>

<fieldset style="width:270px">
	<legend><h2>DEGREE</h2></legend>
	<form method="POST" action="">
	<center>
	<table border="0" width="100%">
		<tr>
			<td>
				<input type="checkbox" name="option[]" value="SSC">SSC<input type="checkbox" name="option[]" value="HSC">HSC<input type="checkbox" name="option[]" value="BSc">BSc<input type="checkbox" name="option[]" value="MSc">MSc
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
	if (empty($_REQUEST['option'][0])) {
	echo "<script>alert('No degree selected');</script>";
}
else
{
	$deg = $_REQUEST['option'];
	echo "Seleced Degree's :";
	for ($i=0; $i < count($deg); $i++) { 
		echo "<br>".$deg[$i];
	}
}

}

?>