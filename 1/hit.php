<?php

if (empty($_REQUEST['name'])) {
	echo "<script>alert('Input a name');</script>";
}
else
{
	$name = $_REQUEST['name'];
	echo "Your Name is <h1>".$name."</h1>";
}

?>