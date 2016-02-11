<?php
header('Content-Type: application/json; charset=utf-8');

 	$curl = curl_init("http://apis.com.br/cities.php");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $json = curl_exec($curl);
    curl_close($curl);

    $encoded = json_decode($json);

    echo "<pre>";
    print_r($encoded);