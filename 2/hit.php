<?php

if (empty($_REQUEST['email'])) {
	echo "<script>alert('Input a email');</script>";
}
else
{
	$mail = $_REQUEST['email'];
	echo "Your mail is ".$mail;
}

?>