<?php
    $url = "https://covid19.th-stat.com/json/covid19v2/getTodayCases.json";
    $json = json_decode(file_get_contents($url), true);
	$UpdateDate = $json["UpdateDate"];
	$Confirmed = $json["Confirmed"];
	$NewConfirmed = $json["NewConfirmed"];
	$Deaths = $json["Deaths"];
	$Hospitalized = $json["Hospitalized"];
	$Recovered = $json["Recovered"];
	
echo "Update ล่าสุดเมื่อ : "$UpdateDate "ติดเชื้อสะสม : "$Confirmed "ราย ติดเชื้อเพิ่มขึ้น : "$NewConfirmed "ราย เสียชีวิตสะสม : "$Deaths "ราย เสียชีวิตเพิ่มขึ้น  : "$NewDeaths "ราย รักษาตัวในรพ.ตอนนี้ : "$Hospitalized "ราย  รักษาตัวในรพ.เพิ่มขึ้น : "$NewHospitalized "ราย  หายแล้วตอนนี้ : "$Recovered "ราย  หายแล้วเพิ่มขึ้น : "$NewHospitalized "ราย ";
?> 
