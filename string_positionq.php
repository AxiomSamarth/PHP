<?php

$string = "This is a sample string that is needed for the test.";
$offset = 0;
$find = 'is';

while($pos = strpos($string, $find, $offset))
{
	echo 'The string '.$find.' is found at  position '.$pos.'<br />';
	$offset = $pos + strlen($find);
}

?>