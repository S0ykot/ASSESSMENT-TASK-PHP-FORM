<?php
error_reporting(0);
$deg = $_REQUEST['option'];
echo "Seleced Degree's :";
for ($i=0; $i < count($deg); $i++) { 
	echo "<br>".$deg[$i];
}

?>