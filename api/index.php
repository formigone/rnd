<?php

function getPhotos($max = 10) {
   $data = [];
   if ($max < 1) {
      $max = 1;
   }

   if ($max > 108) {
      $max = 108;
   }

   for ($i = 0; $i < $max; $i++) {
      array_push($data, 'http://dev.rnd.com/photos/photo_'.($i + 1).'.jpg');
   }

   return $data;
}

$data = ['success' => true, 'message' => null, 'result' => null];
$action = $_GET['action'];

if (function_exists($action)) {
   $max = (int)$_GET['max'];
   $data['result'] = $action($max);
} else {
   $data['success'] = false;
   $data['message'] = 'Invalid action';
}

header('Content-type: application/json');
echo json_encode($data);

