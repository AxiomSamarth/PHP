<?php 

function captcha()
{
	$string = "Thisisasamplestringforcaptcha";
	$string_shuffled = str_shuffle($string);
	return substr($string_shuffled,0,5);
}

?>

<html>

	<head><title>The Captcha</title>

		<style>
			body
			{
				background-color: #333;
			}
		</style>

	</head>

	<body>

		<p style = "font-family:century gothic;font-size:1.7em;color:white;text-align:center;margin-top:10%;">This is an example of generation of Captcha designed by CrazyCoder Samarth Deyagond</p>
		<div style = "background:black;height:20em;width:50%;margin-left:25%;border:solid black 1px;margin-top:5%;">
			<p style = "color:white;font-family:Century Gothic;font-size:4em;text-align:center;margin-top:15%;letter-spacing:20px;;">
			<?php echo captcha(); ?></p>
		</div>
	</body>

</html>