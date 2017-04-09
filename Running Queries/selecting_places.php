<?php

include 'connect.inc.php';

$query = "SELECT * FROM details WHERE city = 'Mangalore' ";

if($run = mysql_query($query))
{
	while($row = mysql_fetch_assoc($run))
	{
		$name = $row['name'];
		echo $name.'<br />';
	}
}
else
{
	mysql_error();
}

?>