<?php

$m = new Memcached();
$m->addServers([
  ['172.17.0.6', 11211]
]);

print_r($m->getStats());

$m->set('test', time());
echo $m->get('test'), PHP_EOL;
