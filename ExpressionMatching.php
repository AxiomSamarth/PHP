<?php

$string = "This is a sample text which is a source of expression matching..!!";

if(preg_match('/ /',$string))
{
	echo "Yes, Match found..!!";
}
else
{
	echo "No, Match not found..!!";
}

?>