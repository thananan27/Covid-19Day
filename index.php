<?php
    $url = "https://covid19.th-stat.com/json/covid19v2/getTodayCases.json";
    $json = json_decode(file_get_contents($url), true);
	$UpdateDate = $json["UpdateDate"];

	
echo $UpdateDate;
?> 
