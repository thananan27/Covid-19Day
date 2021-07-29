<?php
$url = "https://covid19.th-stat.com/json/covid19v2/getTodayCases.json";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo "UpdateDate: ". $json_data["Confirmed"];
?> 
