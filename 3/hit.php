<?php 

if (empty($_REQUEST['day']) OR empty($_REQUEST['month']) OR empty($_REQUEST['year'])) {
	echo "<script>alert('Blank input found');</script>";
}
else
{
	if ($_REQUEST['day']<=31 AND $_REQUEST['month']<=12 AND $_REQUEST['year']<2020) {
		$day = $_REQUEST['day'];
		$month = $_REQUEST['month'];
		$year = $_REQUEST['year'];

		echo $day."/".$month."/".$year;

	}
	else
	{
		echo "<script>alert('Wrong input');</script>";
	}
}


?>