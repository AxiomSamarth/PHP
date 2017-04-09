<?php

include 'header.inc.php';

$var = 10;

echo $var;

/* Instead of include, we can use require 'file_name'. What this does is when it encounters a
file that doesn't exist, it just kills the page where as the include '' option will continue the execution of the 
page. The only difference between the nclude and the require is in the error handling and nothing else */

?>
