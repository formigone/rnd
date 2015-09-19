<?php

const API_URL = 'https://randomuser.me/api/';

if ($argc < 2) {
    printf('Usage: %s <total-results>%s', $argv[0], PHP_EOL);
    exit;
}

$total = (int)$argv[1];
$out = array();

while ($total--) {
    $data = json_decode(file_get_contents(API_URL), true);
    $key = $data['results'][0]['user']['md5'];
    $out[$key] = $data['results'][0]['user'];
    sleep(1);
}


echo PHP_EOL, json_encode(array_values($out)), PHP_EOL;
