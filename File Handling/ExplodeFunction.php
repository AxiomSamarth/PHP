<?php

$file = 'name.txt';
$handle = fopen($file,'r');
$datain = fread($handle, filesize($file));
$file_content = explode(',', $datain);

foreach ($file_content as $key) {
	echo $key ;
	echo "<br />";
}

/* The implode(',',$datain); would always include the comma as the delimeter */

?>