<?php
$compare = "Sagar*145";

if(isset($_POST['password']))
{
	$password = $_POST['password'];
	if(!empty($password))
	{
		if($password == $compare)
		{
			echo "The match for the password found..!!";
		}
		else
		{
			echo "The password didn't match..!!";
		}
	}
	else
	{
		echo "I expect you to enter a password..!!";
	}
}


?>

<html>
	<head><title>Working with  POST function</title></head>
	<body>
		<form action = "WorkingWithPost.php" method = "POST">
			Password : <br />
			<input type = "password" name = "password" value = "" />
			<br /><br />
			<input type = "submit" value = "Submit" />
		</form>
	</body>
</html>