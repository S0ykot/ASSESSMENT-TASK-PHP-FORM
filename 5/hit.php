<?php

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

?>