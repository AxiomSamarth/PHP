<?php

$string = "This is a sample string that is subject to test the replacement of is";

$string_new = str_replace('is', 'IS', $string);

echo $string_new;

?>