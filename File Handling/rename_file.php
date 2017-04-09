<?php

$file = '15276txt';

$random = rand(10000,99999);

if(rename($file, $random.'.txt'))
{
	echo 'The file '.$file.' has been renamed to <strong>'.$random.'.txt</strong> succesfully..!!';
}
else
{
	echo 'Error renaming the file..!!';
}
?>