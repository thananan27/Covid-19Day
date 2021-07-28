<?php
    $url = "https://dogechain.info/api/v1/address/balance/DMr3fEiVrPWFpoCWS958zNtqgnFb7QWn9D";
    $json = json_decode(file_get_contents($url), true);
    $balance = json("balance")

    echo $balance
?> 
