<?php

$name = 'Sagar@PESIT';
$encrypted_name = md5($name);
echo $encrypted_name;

/* Store your passwords after encrypting them in a database and this encryption is one way
and hence safe */

?>