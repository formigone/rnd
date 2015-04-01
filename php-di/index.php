<?php

require_once 'vendor/autoload.php';

$container = \DI\ContainerBuilder::buildDevContainer();

$service = $container->get('App\Service\ComplexService');
$mcd = new \Memcache;
var_dump($service, $mcd);
