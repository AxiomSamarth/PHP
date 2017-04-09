<?php

error_reporting(0);
session_start();

/* If we wanna destroy all the session then make use of session_destroy(); function */

echo "Welcome ".$_SESSION['username']."You are ".$_SESSION['age'];

?>