<?php

function has_space($string)
{
	if(preg_match('/ /',$string))
	{
		return true;
	}
	else
	{
		return false;
	}
}

$string = "This is having spaces.";

if(has_space($string))
{
	echo 'This has at least one space..!!';
}
else
{
	echo 'This is having no spaces..!!';
}

?>