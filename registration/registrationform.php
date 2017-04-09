<?php

require 'connect.inc.php';

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['fullname']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$fullname = $_POST['fullname'];

	if($password != $confirm_password)
	{
		echo 'The passwords didn\'t match';
		die();
	}

	$pass_hash =md5($password);

	$query = "SELECT username FROM users WHERE username = '$username' ";
	if($run = mysql_query($query))
	{
		if(mysql_num_rows($run)>=1)
		{
			echo 'Username already exists..!!';
		}
	
		else
		{
			$query = "INSERT INTO users VALUES(NULL,'".mysql_real_escape_string($username)."','".mysql_real_escape_string($pass_hash)."','".mysql_real_escape_string($fullname)."')";
			if(mysql_query($query))
			{
				header('Location:loginform.inc.php');
			}
			else
			{
				echo 'Couldn\'t register at the moment..!! Please try again later..!! ';
			}
		}
	}
}


?>
<!doctype html>
<html lang='en'>
	<head>
		<title>Registration Form</title>
		<meta charset = 'utf-8' />
	</head>
	<body>
		<center><h2>Registration form</h2></center>
		<center>
			<form action = "<?php echo $current_file; ?>" method = "POST">
				<p>Username <br /> <input type = "text" name = "username" size = "30" maxlength = "25" required /></p>
				<p>Password <br /> <input type = "password" name = "password" size = "30" maxlength = "25" required /></p>
				<p>Confirm  <br /> <input type = "password" name = "confirm_password" size = "30" required /></p>
				<p>Fullname <br /> <input type = "text" name = "fullname" maxlength = "25" size = "30" required /></p>
				<p><input type = "submit" value = "Submit" /></p>
			</form>
		</center>	
	</body>
</html>