<?php

$to = "deyagondsamarth@gmail.com";
$subject = "This is my php application to send an email";
$body = "Hey CrazyCoder Samarth Deyagond. Your php application of sending an email is working successfully..! Congratulations..!!";
$from = 'From: "Samarth Deyagond" <postmaster@localhost>';

if(mail($to, $subject, $body, $from))
{
	echo "Your email has been successfully sent...!!";
}
else
{
	echo "Error sending email";
}

/* You can just create an elegant text box or textarea and grab the content of it 
and then use it to assign to the $body and then mail it to the recepient */

/*Follow the same method for creating the contact form*/

?>