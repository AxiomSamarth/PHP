<?php

	$time = time();
	echo $time;

	$actual_time = date('H:i:s',$time);

	echo "<br /><br />The time is ".$actual_time;

?>