<?php

$string = "This is a sample string under test";

$replace = array('is','sample','under');

$string_new = str_replace($replace, ' ', $string);

echo $string_new;

?>