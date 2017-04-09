<?php

$string = "This is a sample string under testing.";

$find = array('THIS','IS','SAmple');

$replace = array('THIS','IS','SAMPLE');

$string_new = str_ireplace($find,$replace,$string);

echo $string_new;

?>