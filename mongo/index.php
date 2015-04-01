<?php

$mongo = new Mongo();
$dict = $mongo->selectDB('dict');
$rand = $dict->selectCollection('rand');
$letters = 'qwertyuiopasdfghjklzxcvbnm';
$lettersLen = strlen($letters) - 1;

//while (true) {
//    $len = rand(3, 12);
//    $word = '';
//    while(--$len) {
//        $word .= $letters[rand(0, $lettersLen)];
//    }
//
//    $rand->insert(['value' => $word]);
//}

$words = $rand->findOne(['value' => 'happy']);
foreach ($words as $word) {
    var_dump($words);
}
