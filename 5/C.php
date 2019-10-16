<?php

$deg[]="";
$msg="";
if (isset($_REQUEST['submit'])) {
	
	if (empty($_REQUEST['option'][0])) {
	echo "<script>alert('No degree selected');</script>";
}
else
{
	$deg = $_REQUEST['option'];
	$msg= "Seleced Degree's :";
}
}

?>


<html>
<head>
	<title>Task5 current pag with selected value</title>
</head>
<body>

<fieldset style="width:270px">
	<legend><h2>DEGREE</h2></legend>
	<form method="POST" action="">
	<center>
	<table border="0" width="100%">
		<tr>
			<td>
				<input type="checkbox" name="option[]" value="SSC" 
				<?php for ($i=0; $i < count($deg); $i++) 
				{ 
					if ($deg[$i]=='SSC') {
						echo "checked";
					}
				}
				?>

				>SSC<input type="checkbox" name="option[]" value="HSC" <?php for ($i=0; $i < count($deg); $i++) 
				{ 
					if ($deg[$i]=='HSC') {
						echo "checked";
					}
				}
				?>
				>HSC<input type="checkbox" name="option[]" value="BSc"<?php for ($i=0; $i < count($deg); $i++) 
				{ 
					if ($deg[$i]=='BSc') {
						echo "checked";
					}
				}
				?>>BSc<input type="checkbox" name="option[]" value="MSc" <?php for ($i=0; $i < count($deg); $i++) 
				{ 
					if ($deg[$i]=='MSc') {
						echo "checked";
					}
				}
				?>>MSc
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
	<p><?php echo $msg; for ($i=0; $i < count($deg); $i++) { echo "<br>".$deg[$i];}?></p>
</fieldset>

</body>
</html>