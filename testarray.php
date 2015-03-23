<?php

$data = unserialize(file_get_contents('stories.json'));

for ($f = 0; $f < count($data); $f++) {
	echo ($data['assetId']);
}

// print_r($data)
// print_r(file_get_contents('stories.json'))

?>