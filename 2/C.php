<?php

$mail="";
$full="";
if (isset($_REQUEST['submit'])) {
	
	if (empty($_REQUEST['email'])) {
	echo "<script>alert('Input a email');</script>";
}
else
{
	$mail = $_REQUEST['email'];
	$full= "Your mail is ".$mail;
}

}

?>



<html>
<head>
	<title>Task2 current page with current value</title>
</head>
<body>

<fieldset style="width: 270px;">
	<legend><h2>EMAIL</h2></legend>
	<form method="POST" action="">
	<table border="0" width="100%">
		<tr>
			<td>
				<input type="email" name="email" autocomplete="off" value="<?php echo $mail; ?>">
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
	<p><?php echo $full; ?></p>
</fieldset>

</body>
</html>