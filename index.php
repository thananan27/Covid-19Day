<?php
$json_url = "https://covid19.th-stat.com/json/covid19v2/getTodayCases.json";  
$crl = curl_init();
curl_setopt($crl, CURLOPT_URL, $json_url);
curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($crl, CURLOPT_SSL_VERIFYPEER, FALSE); 
$json = curl_exec($crl);
curl_close($crl);
$emp = json_decode($json, TRUE);
?>
