<?php


/*When I need to redirect a page to some other page using header() function no other thing 
must be there as header in that page. If we happen to use then use ob_start();*/
ob_start();

?>

<h1>MY PAGE</h1>

<?php

$redirect_page = "http://google.com";
$redirect = true;

if($redirect)
{
	header('Location: '.$redirect_page);
}

/* It is recommended that we should use the ob_end_clean() or ob_end_flush() at the end of the header() */

ob_end_flush();

?>