<?php

require ('authentication.php');

// check if a form was submitted
if( !empty( $_POST ) ){

// convert form data to json format
    $postArray = array(
      // "headline" => $_POST['headline'],
      "p1" => $_POST['p1'],
      // "p2" => $_POST['p2'],
      // "p3" => $_POST['p3'],
    ); //you might need to process any other post fields you have..

$json = json_encode( $postArray );
// make sure there were no problems
//if( json_last_error() != JSON_ERROR_NONE ){
    //exit;  // do your error handling here instead of exiting
// }
$file = 'entries.json';
// write to file
//   note: _server_ path, NOT "web address (url)"!
file_put_contents( $file, $json);
header("Location: index.php"); 
die("Redirecting to index.php"); 
} 
?>