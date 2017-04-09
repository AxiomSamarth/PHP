<?php

if(isset($_POST['text']) && isset($_POST['search_text']) && isset($_POST['replace_text']))
{
	$text = $_POST['text'];
	$search_text = $_POST['search_text'];
	$replace_text = $_POST['replace_text'];

	if(!empty($text) && !empty($search_text) && !empty($replace_text))
	{
		$text = str_ireplace($search_text, $replace_text, $text);
		echo $text;
	}
	else
	{
		echo "Please fill in all the credentials";
	}
}

?>
<!DOCTYPE html>
<html>
	<head><title>Find and Replace Application</title></head>
	<body>

		<form action = "FindAndReplaceApp.php" method = "POST">

			<textarea name = "text" rows = "10" cols = "50" placeholder = "Your text here"></textarea>
			<p><br /><br />Search for : </p>
			<input type = "text" name = "search_text" value = "" />
			<p><br /><br />Replace with : </p>
			<input type = "text" name = "replace_text" value = "" />
			<br /><br />
			<input type = "submit" value = "Find and Replace" />



		</form>

	</body>
</html>