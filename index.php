<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, 'https://covid19.th-stat.com/json/covid19v2/getTodayCases.json');
$result = curl_exec($ch);
curl_close($ch);

$obj = json_decode($result);
echo $obj->Confirmed;

?> 
