<?php

$filename = 'text.txt';

if(file_exists($filename))
{
	echo 'File already exists..!!';
}
else
{
	$handle = fopen($filename ,'w');
	fwrite($handle, 'New text file has been created');
	fclose($handle);
}

?>