<?php

if(isset($_POST['user_text']) && !empty($_POST['user_text']))
{
	$user_text = $_POST['user_text'];
	echo $user_text;
}

?>

<form action = "printing_text_from_input_field.php" method = "POST">
<textarea name = "user_text" rows = 4 cols = "50" placeholder = "Your text here">

		<?php echo $user_text; ?>

</textarea>
<br /><input type = "submit" value  = "Submit" />
</form>