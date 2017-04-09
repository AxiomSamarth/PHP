<?php

$ip_address = $_SERVER['REMOTE_ADDR'];
echo $ip_address;
$ip_blocked = array('127.0.0.1','100.100.102.1','::1');

?>

<h1>Welcome..!!</h1>

<?php

foreach ($ip_blocked as $ip) {
	if($ip==$ip_address)
	{
		echo 'Your IP address '.$ip.' has been blocked';
	}
}

?>