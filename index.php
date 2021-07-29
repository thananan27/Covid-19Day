<?php
$json = file_get_contents('https://covid19.th-stat.com/json/covid19v2/getTodayCases.json');
$obj = json_decode($json);
echo $obj->Confirmed;
?> 
