<?php

$handle = file('name.txt');

foreach ($handle as $key) {
	echo $key.', ';
}

?>