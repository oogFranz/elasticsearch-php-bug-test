<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Elasticsearch\ClientBuilder;


$client_builder = ClientBuilder::create();
$client_builder->setHosts(['host' => 'localhost', 'port' => '9200']);

$client = $client_builder->build();

print_r($client->cat()->health());

