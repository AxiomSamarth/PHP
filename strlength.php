<?php

$string = "This is a string whose length is to be found out.";

$var = strlen($string);

echo $var.'<br /><br />';

for($x=0; $x<=strlen($string); $x++)
{
	echo $string[$x].'<br />';
}

?>