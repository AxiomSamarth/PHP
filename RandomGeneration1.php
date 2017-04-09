<?php

if(isset($_POST['dice']))
{
	echo rand(1,6);
}

?>

<html>
	<head><title>Random Dice</title></head>
	<body>

		<form action = "" method = "POST">
			<input type = "submit" name = "dice" value = "Roll a dice" />
		</form>

	</body>
</html>