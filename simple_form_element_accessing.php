<?php

if(isset($_POST['submit']))
{
	if(!empty($_POST['name']) && !empty($_POST['age']))
	{
		echo "You typed in the name as ".$_POST['name']." and age as ".$_POST['age'];
	}
	else
	{
		echo "Please fill in all the fields..!!";
	}
}


?>

<!doctype html>
<html lang='en'>
	<head>
		<title>Form element accessing</title>
		<meta charset = "utf-8" />
	</head>
	<body>
		<form action = "simple_form_element_accessing.php" method = "POST">
			Name : <input type = "text" value = "" name = "name" /><br/><br />
			Age&nbsp;&nbsp;&nbsp;  : <input type = "text" value = "" name = "age" /><br /><br/>
			<input type = "submit" value = "Submit" name = "submit"/>
		</form>
	</body>
</html>