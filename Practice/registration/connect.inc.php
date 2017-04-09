<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

if(mysql_connect($mysql_host, $mysql_user, $mysql_pass))
{
    if(!mysql_select_db('practice'))
    {
        echo 'Error establishing connection between the server and database.';
    }
}
else
{
    echo 'There was error connecting to the server..!';
}

?>