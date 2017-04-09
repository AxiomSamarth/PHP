<?php

$hostname = 'localhost';
$username = 'root';
$password = '';

if(mysql_connect($hostname, $username, $password))
{
	if(!mysql_select_db('practice'))
	{
		echo 'Error establishing connection between database and server';
	}
}
else
{
	echo "Error establishing connection to the server";
}

?>