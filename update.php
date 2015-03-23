<?php

$filename = "../{$_POST['filepath']}/{$_POST['file']}.json";



$json = json_decode($_POST['data'], true);
    
$output['tabledata'] = $json;


date_default_timezone_set('America/Kentucky/Louisville');
$output['updated'] = time();


//echo json_encode($output, JSON_PRETTY_PRINT);
file_put_contents($filename, json_encode($output, JSON_PRETTY_PRINT));
echo 'updated';

?>