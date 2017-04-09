<?php

$handle = fopen('name.txt','w');
fwrite($handle, 'Samarth');
fclose($handle);

?>