<?php
if (empty($_REQUEST['blood'])) {
	echo "<script>alert('Select your Blood group');</script>";
}

else
{
	$bGroup = $_REQUEST['blood'];
	echo "Selected Blood group is ".$bGroup;
}

?>