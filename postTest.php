<?php

$mysql_host = "localhost";
$mysql_pass = "";
$mysql_user = "root";

if(mysql_connect($mysql_host, $mysql_user, $mysql_pass))
{
	if(!mysql_select_db('practice'))
	{
		echo "The connection between the database and the server couldn't be established..!";
	}
	else
	{
		echo 'connected to database<br />';
	}
}
else
{
	echo "The connection couldn't be established to the server" ;
}

	$query = "INSERT INTO posts (id,branch,post) VALUES ('".mysql_real_escape_string("5")."','".mysql_real_escape_string("ECE")."','".mysql_real_escape_string('This is a new post')."')";
	if($run = mysql_query($query))
	{
		echo 'Post successful..!';
	}
	else
	{
		echo 'not successful..!';
		mysql_error();
	}


?>