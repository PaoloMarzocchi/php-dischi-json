<?php 

$jsonString = file_get_contents('albums.json'); 

header('Content-type: application/json');

echo $jsonString;


?>