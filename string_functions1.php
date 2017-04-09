<?php

$string = "This is a sample string.";

/*The second argument will convert the words into associative array and the words will be 
displayed along with their indices which represent their word number actaully*/

/*The second argument when set to 2 will display the absolute starting 
 of the words */

$string_word_count = str_word_count($string, 1);

print_r($string_word_count);

echo "<br /><br />";

$string_word_count1 = str_word_count($string, 2);

print_r($string_word_count1);

?>