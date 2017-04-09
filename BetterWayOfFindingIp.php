<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_address = $_SERVER['REMOTE_ADDR'];

echo $_SERVER['HTTP_HOST'].'<br /><br />';

if(!empty($http_client_ip))
{
	$ip_address = $http_client_ip;
}
else if(!empty($http_x_forwarded_for))
{
	$ip_address = $http_x_forwarded_for;
}
else
{
	$ip_address = $remote_address;
}

echo $ip_address;

?>