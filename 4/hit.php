<?php

if (empty($_REQUEST['gender'])) {
	echo "<script>alert('Select gender');</script>";
}
else
{
	$gen = $_REQUEST['gender'];
	echo "Selected gender is ".$gen;
}

?>