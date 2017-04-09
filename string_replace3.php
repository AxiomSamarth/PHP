<?php

$string = "This is a sample string for testing the function string replace";

$find = array('is','sample','testing');

$replace = array('IS','SAMPLE','TESTING');

echo $string_new = str_replace($find,$replace,$string);

?>