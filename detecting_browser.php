<?php

$browser = get_browser(null, true);

print_r($browser);

echo '<br /><br /><br />'.$browser['browser'];

$browser = strtolower($browser['browser']);

if($browser!="chrome")
{
	echo "<br /><br />You need to use chrome..!!";
}

?>