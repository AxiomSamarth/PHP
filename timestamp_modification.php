<?php

$time = time();
$time_modified = date('d M Y H:i:s',strtotime('+1 week'));

echo 'The time is '.$time.'<br /><br />The modified time is '.$time_modified;


?>