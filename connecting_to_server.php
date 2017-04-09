<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

if(mysql_connect($mysql_host,$mysql_user,$mysql_pass))
{
	if(mysql_select_db('friends'))
	{
		echo "The server and the database <strong>friends</strong> are connected..!!";
	}
	else
	{
		echo "The server and the database could not connect with each other..!!";
	}
}
else
{
	echo 'Error connecting to the database..!!';
}

?>