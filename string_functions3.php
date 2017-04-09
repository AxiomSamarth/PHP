<?php

$string = "This is a sample string.";

$string_shuffled = str_shuffle($string);

echo $string_shuffled;

$string_shuffled1 = substr($string_shuffled , 0, strlen($string_shuffled)/5);

echo "<br /><br />$string_shuffled1";

/* The functions are str_shuffle() and strlen() and substr(, , ,) and also str_reverse */

$string_reversed = strrev($string);

echo "<br /><br />$string_reversed";

?>