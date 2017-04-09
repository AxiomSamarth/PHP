<?php

if(isset($_POST['name']))
{
	$file = fopen('name.txt','a');
	fwrite($file, "\n".$_POST['name']);
	fclose($file);
}

?>

<html>
	<head><title>Appending a file</title></head>
	<body>
		<form action = "Appending_file.php" method = "POST">
			Name : <input type = "text" name = "name" required/><br /><br />
			<input type = "submit" value = "Submit" />
		</form>
	</body>
</html>