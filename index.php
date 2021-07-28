<?php


$testUrl = 'https://covid19.th-stat.com/json/covid19v2/getTodayCases.json';


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $testUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// localhost, development only.
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);// localhost, development only.

$output = curl_exec($ch);
if ($output === false) {
    // if curl error.
    $curlError = curl_error($ch);
    $curlErrorNo = curl_errno($ch);
}

curl_close($ch);


echo 'curl result:<br>' . PHP_EOL;
var_dump($output);

if (isset($curlError)) {
    echo 'Error:<br>' . PHP_EOL;
    var_dump($curlError);
    echo 'Error code:<br>' . PHP_EOL;
    var_dump($curlErrorNo);
}
