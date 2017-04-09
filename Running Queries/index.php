<?php
include 'connect.inc.php';
?>

<!doctype html>
<html lang = 'en'>
	<head>
		<title>Implementing MySQL queries in php</title>
		<meta charset = 'utf-8' />
	</head>
	<body>
		<?php

		$query = "SELECT * FROM details ORDER BY id";
		if($query_run = mysql_query($query))
		{
			while($row = mysql_fetch_assoc($query_run))
			{
				$name = $row['name'];
				$place = $row['city'];
				echo $name.' is from '.$place.'<br /><br />';
			}
		}
		else
		{
			echo mysql_error();
		}

		?>
	</body>
</html>