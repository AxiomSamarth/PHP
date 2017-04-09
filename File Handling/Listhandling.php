<?php

$directory = '../File Handling';

if($handle = opendir($directory.'/'))
{
	echo "Looking inside ".$handle."<br />";

	while($file = readdir($handle))
	{
		echo $file.'<br />';
		/* We can add the anchor tags to make them as links */
	}
}



?>