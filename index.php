<?php
$url = "http://urlToYourJsonFile.com";
$json = file_get_contents($url);
$json_data = json_decode($json, true);
echo "My token: ". $json_data["access_token"];
?> 
