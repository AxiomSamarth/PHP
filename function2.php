<?php

function add($num1,$num2)
{
	echo "The sum is ".($num1+$num2);
}

function subtract($num1,$num2)
{
	echo "<br /><br />The difference is ".($num1 - $num2);
}


$number1 = 20;
$number2 = 30;

add(10,20);
subtract($number2, $number1);

?>