<?php
 
$url = 'https://covid19.th-stat.com/json/covid19v2/getTodayCases.json';
 
//read json file from url in php
$readJSONFile = file_get_contents($url);
 
//convert json to array in php
$array = json_decode($readJSONFile, TRUE);
var_dump($array); // print array
 
?>
