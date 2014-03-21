<?php

require('/usr/local/neo4jphp/vendor/autoload.php');

$client = new \Everyman\Neo4j\Client('localhost', 7474);
$me = $client->makeNode()->setProperty('type', 'employee')->setProperty('name', 'Jeremy Hicks')->save();
$ksl = $client->makeNode()->setProperty('type', 'company')->setProperty('name', 'KSL')->save();
$me->relateTo($ksl, 'WORKS')->save();