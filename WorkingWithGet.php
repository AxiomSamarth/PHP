<?php

if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']))
{
	echo "All the input values are submitted correctly..!!";

	$day = $_GET['day'];
	$date = $_GET['date'];
	$year = $_GET['year'];

	if(!empty($day) && !empty($date) && !empty($year))
	{
		echo "All are not empty..!!";
	}
	else
	{
		echo "Please fill out all the fields..!!";
	}
}

?>

<html>
	<head><title>Working with GET function</title></head>
	<body>
		<form action = "WorkingWithGet.php" method = "GET">
			Day :<input type = "text" name = "day" value = "" /><br /><br />
			Date :<input type = "text" name = "date" value = "" /><br /><br />
			Year :<input type = "text" name = "year" value = "" /><br />
			<input type = "submit" name = "submit" value = "Submit" />
		</form>
	</body>
</html>