<?php

$string1 = "This is a sample text for testing";


if(preg_match('/This is/', $string1))
{
	echo  "Match found..!!";
}
else
{
	echo "Match not found..!!";
}



?>