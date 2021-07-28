<?php

$url = "https://covid19.th-stat.com/json/covid19v2/getTodayCases.json";

//call api
$json = file_get_contents($url);
$json = json_decode($json);
$date = $json->results[0]->UpdateDate;
$Confirm = $json->results[0]->Confirmed;
echo "Update ล่าสุดเมื่อ: " . $Date . ", ติดเชื้อสะสม: " . $Confirm;

// output
// Latitude: 40.6781784, Longitude: -73.9441579
?>
