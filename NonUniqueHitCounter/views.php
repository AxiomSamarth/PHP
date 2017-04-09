<?php

$handle = fopen('count.txt', 'r');
$count = fread($handle, filesize('count.txt'));
fclose($handle);

$ip_address = $_SERVER['REMOTE_ADDR'];

$ip = file('ip.txt');

foreach ($ip as $i) {

	echo $i.'<br>';
	
	if($ip_address == trim($i))
	{
		$found = true;
		break;
	}
	else
	{
		$found = false;
	}

}

if($found != true)
{
		$count += 1;
		$handle = fopen('count.txt', 'w');
		fwrite($handle, $count);
		fclose($handle);

		$handle = fopen('ip.txt', 'a+');
		fwrite($handle, $ip_address."\n");
		fclose($handle);
}

echo $count;


?>