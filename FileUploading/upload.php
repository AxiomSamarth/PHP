<?php

$target_dir = 'Uploads/';


if(isset($_POST["file"]))
{
	$file_name = $_FILES["file"]["name"];
	$file_size = $_FILES["file"]["size"];
	$file_type = $_FILES["file"]["type"];
	$temp_location = $_FILES["file"]["tmp_name"];

	if(!empty($file_name))
	{
		move_uploaded_file($temp_location, $target_dir.$file_name);
		echo "Upload Successful..!!";
	}
	else
	{
		echo "Please choose a file..!!";
	}
}
/*else
{
	echo "The file has not been uploaded properly..!!";
}*/

?>

<!DOCTYPE html>
<html lang='en'>
	<head>
		<title>Uploading a file</title>
		<meta charset = "utf-8" />
	</head>
	<body>
		<form action = "upload.php" method = "POST" enctype = "multipart/form-data">
			<input type = "file" name = "file" />
			<br /><br />
			<input type = "submit" value = "Submit" />
		</form>
	</body>
</html>