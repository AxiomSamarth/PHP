<?php

$string1 = "This is a sample text that will be considered for comaprison ahead.";
$string2 = "This is also a sample text that must be considered for comaprison and givw out the result in percentage.";

similar_text($string1, $string2, $result);

echo "The percentage similarity is $result";

echo "<br /><br />The string length is ".strlen($string1);

?>