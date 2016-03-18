<?php

require __DIR__.'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\NullHandler;
use Monolog\Processor\WebProcessor;

function get($name, $path = '/tmp/monolog-test.log', $level = Logger::DEBUG){
   $logger = new Logger($name);
   $logger->pushProcessor(new WebProcessor());
   $logger->pushHandler(new StreamHandler($path, $level));
   $logger->pushHandler(new NullHandler($level));

   return $logger;
}


function loop($max, $msg, $cb) {
   $log = get('loop');

   $log->addDebug('init', ['max' => $max]);

   if ($max < 0) {
      $log->addWarning('bad input');
   }

   for ($i = 0; $i < $max; $i++) {
      $cb($msg);
   }
   $log->addDebug('done');
}

$greet = function($msg) {
   $log = get('greet');
   $log->addDebug('init', ['msg' => $msg]);

   print_r($msg.PHP_EOL);

   $log->addDebug('done');
};

loop(5, 'hello 5 times', $greet);
loop(0, 'no comments', $greet);
loop(-10, 'should not be said', $greet);
