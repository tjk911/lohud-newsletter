<?php 
error_reporting(E_ERROR | E_WARNING);
//Destroy the session
session_start();
session_destroy();
     
//Redirect to the login screen 
header("Location: index.php"); 
die("Redirecting to: index.php");

?>