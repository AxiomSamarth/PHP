<?php

if(isset($_POST['username']) && isset($_POST['password']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pass_hash = md5($password);

	$query = "SELECT * FROM users WHERE username = '$username' AND password = '$pass_hash' ";

	if($run = mysql_query($query))
	{
		if(mysql_num_rows($run))
		{
			while($row = mysql_fetch_assoc($run))
			{
				$user = mysql_result($run, 0, 'id');
				$_SESSION['id'] = $user;
				header('Location:index.php');
			}
		}
		else
		{
			echo 'No results found..!';
		}
	}
	else
	{
		mysql_error();
	}
}

?>

<!doctype html>
<html lang='en'>
	<head>
		<title>Log in form</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width = device-width, densitydpi = devicedpi, initial-scale = 0" />
		<link rel = "stylesheet" href = "style.css" type = "text/css" />
	</head>
	<body>
		<div id = "form-div">
			<h1>Log in</h1>
			<form action = "<?php echo $current_file; ?>" method = "POST">
			<p>Username : <input type = "text" name = "username" required/></p>
			<p>Password &nbsp;: <input type = "password" name = "password" required /></p>
			<p><input type = "submit" value = "LOG IN" /></p>
		</form>
		</div>
	</body>
</html>