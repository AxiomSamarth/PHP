<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_password = '';

if(mysql_connect($mysql_host, $mysql_user, $mysql_password))
{
	if(!mysql_select_db('practice'))
	{
		echo 'unable to establish connection between the server and the database..!!';
	}
}
else
{
	echo 'Unable to establish the connection with te server';
}

?>