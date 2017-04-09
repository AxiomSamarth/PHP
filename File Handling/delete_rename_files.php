<?php

$filename = "filetodelete.txt";

/* Inorder to avoid the unwanted error message once the file has been deleted 
we can make use of if(@unlink($filename))... */

if(unlink($filename))
{
	echo 'The file '.$filename.' has been successfully deleted..!!';
}
else
{
	echo 'Error deleting the file '.$filename;
}

?>