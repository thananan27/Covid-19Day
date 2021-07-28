<?php

$url = "https://covid19.th-stat.com/json/covid19v2/getTodayCases.json";

//call api
$json = file_get_contents($url);
$json = json_decode($json);
$lat = $json->results[0]->UpdateDate;
$lng = $json->results[0]->Confirmed;
echo "Update ล่าสุดเมื่อ: " . $UpdateDate . ", ติดเชื้อสะสม: " . $Confirmed;

// output
// Latitude: 40.6781784, Longitude: -73.9441579
?>
