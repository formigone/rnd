<?php

$m = new MongoClient();
$db = $m->explorr;
$col = $db->users;

function add(array $data, $col) {
   $col->insert($data);
}

function listAll($col) {
   $data = [];

   foreach ($col->find() as $row) {
      $data[] = $row;
   }

   return $data;
}

$cmd = $argv[1] ?: 'list';

switch ($cmd) {
   case 'list':
      $data = listAll($col);
      print_r($data);
      break;
   case 'add':
      $data = $argv[2];
      add(['name' => $data], $col);
      break;
}

