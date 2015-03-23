<?php

/**********************
CJ Password Generator
by: Jesse Hazel
ver 1.0

Originally meant for the CJ admin tool, now used for Rockland Angle
**********************/


//The password we want to use
$password = "rocklandangle";

//A random salt using Blowfish and set cost to 10
$salt= "$2a$10$" . strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');

//Crypt our password
$storedpass = crypt($password, $salt);

echo $storedpass;
?>