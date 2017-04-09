<?php 

$string = "This is a sample string.";

/* The third argument will also consider the special characters into the word and 
if they are separate they will be added into the word count */

$string_word_count = str_word_count($string, 1, '.');

print_r($string_word_count);

?>