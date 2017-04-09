<?php

include 'core.inc.php';
include 'connect.inc.php';


if(isset($_SESSION['id']) && !empty($_SESSION['id']))
{
	echo 'You are logged in..!<a href = "logout.php">Logout</a>';
}
else
{
	include 'registrationform.php';
}

?>