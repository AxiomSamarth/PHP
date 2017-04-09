<?php

/* The header() function must be used atfirst nd there must be no output prior to header() */

$redirect_page = "http://google.com";
$redirect = true;

header('Location: '.$redirect_page);


?>