<?php

$file = fopen("apikeys.txt", "r");
while(! feof($file)) {
  $readarr = fgets($file);
  $readarr = explode('|',$readarr);
  $api1 = $readarr[0];
  $api2 = $readarr[1];
}
$json1 = file_get_contents("http://api-internal.usatoday.com/PresentationService/v3/sites/PWES/fronts/newsletter_rockland/layouts?apiKey=".$api1);
$array1 = json_decode($json1, true);
$assets = array();


for ($i=0; $i < count($array1['layoutModules']); $i++){
    for ($x=0; $x < count($array1['layoutModules'][$i]['contents']); $x++){
        $assets[] = $array1['layoutModules'][$i]['contents'][$x]['id'];
    };
};

$assets_comma_string = implode ("%20", $assets);

$searchv4 = "http://api.gannett-cdn.com/prod/Search/v4/assets/proxy?fq=statusname:published&fq=sitecode:PWES&sc=PWES&apiKey=newsletter-search&debug=false&format=json&fq=assettypename:text&fq=assetid:(".$assets_comma_string.")&format=json&api_key=".$api2;
$json2 = file_get_contents($searchv4);

$data2 = json_decode($json2, true);

$save = file_put_contents('stories.json', serialize($data2['results']));

$stories = unserialize(file_get_contents('stories.json'));




for ($y = 0; $y < count($stories); $y++) {
	echo $stories[$y]['assetId'];
};

print_r($assets);

for ( $a1 = 0; $a1 < count($assets); $a1++ ) {
  for ( $s = 0; $s < count($stories); $s++ ) {
    if ( $a1 == 3 ){
      if ($assets[$a1] == $stories[$s]['assetId']) {
        echo "<p>".$assets[$a1]."</p>";
        echo "<h1>".$stories[$s]['headline']."</h1>";
      }
    }
  }
};

?>