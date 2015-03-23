<?php
error_reporting(0);
//Check to see if the user is logged in
session_start();
if(empty($_SESSION['user']) || $_SESSION['timeout'] + 1800 <= time()){ 
	session_destroy();
    header("Location: index.php"); 
    die("Redirecting to index.php"); 
}

//If session is still good, refresh the timeout  
$_SESSION['timeout'] = time();

?>