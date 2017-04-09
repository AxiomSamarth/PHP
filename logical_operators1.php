<?php

	$a = 10;

	if ($a>0 && $a<10)
	{
		echo "The number $a is a single digit number..!!";
	}
	else if ($a>=10 && $a<100)
	{
		echo "The number $a is a two digit number..!!";
	}
	else
	{
		echo "The number is either negative or greater than 99..!!";
	}

?>