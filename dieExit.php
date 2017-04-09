<?php

	$a = 10;
	$b = 0;

	$result = $a + $b;
	echo "The sum of two numbers is $result.";

	$result = $a - $b;
	echo "<br /><br />The difference of the two numbers is $result.";

	$result = $a * $b;
	echo "<br /><br />The product of the two numbers is $result";

	/* The die() and exit() functions are those which stops the execution of the php
	scripts once some condition is encountered or once that line is interpreted.
	Some text message or any error message can also be enclosed within the function call
	paranthesis */

	if($b==0)
	{
		die('<br /><br />The denominator cannot be zero..!! This is where the die() function comes into picture');
	}
	else
	{
		$result = $a/$b;
		echo "<br /><br />The quotient is $result";
	}

?>