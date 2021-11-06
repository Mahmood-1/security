<?php

    $data = [
    'ip' => $_SERVER['REMOTE_ADDR'], 
    'url' => $_SERVER['HTTP_REFERER'], 
    'time' => time()
];

    $inp = file_get_contents('results.json');
    $tempArray = json_decode($inp);
    array_push($tempArray, $data);
    $jsonData = json_encode($tempArray);
    file_put_contents('results.json', $jsonData);
