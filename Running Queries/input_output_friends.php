<?php

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';

if(mysql_connect($mysql_host, $mysql_user,$mysql_pass))
{
	if(!mysql_select_db('friends'))
	{
		echo "There was error finding the database 'friends' ";
	}
}
else
{
	echo "There was error establishing connection between the server and the database..!!";
}

?>

<!doctype html>
<html lang='en'>
	<head>
		<title>Enquiry form</title>
		<meta charset = 'utf-8' />
		<body>
			<form action = "input_output_friends.php" method = "POST">
				Name : <input type = "text" name = "name" required /><br /><br />
				<input type = "submit" value = "Submit">
			</form>

<?php

if(isset($_POST['name']))
{
		if($enquiry_name = $_POST['name'])
	{
		if(!empty($enquiry_name))
		{
			$query = "SELECT * FROM details WHERE name = '$enquiry_name' ";
			if($run = mysql_query($query))
			{
				if(mysql_num_rows($run) == 0)
				{
					echo '<br />No results found. Try with different key word..!!<br />';
				}
				while($row = mysql_fetch_assoc($run))
				{
					$name = $row['name'];
					$city = $row['city'];
					$id = $row['id'];
					$address = $row['address'];
					echo '<br />'.$id.' '.$name.' stays in '.$city.' at '.$address.'<br /><br />';
				}
			}
			else
			{
				echo "Error in MySQL syntax<br />";
			}
		}
	}

}

?>

		</body>
</html>
