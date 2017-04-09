<?php

$string = 'This is <img src="image.jpg"> string';

$string_slashed = htmlentities(addslashes($string));

echo "$string_slashed<br /><br />";

$string_stripped = stripslashes($string);

echo $string_stripped;

?>