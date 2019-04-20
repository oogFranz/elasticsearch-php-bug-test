<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Elasticsearch\ClientBuilder;


$client_builder = ClientBuilder::create();
$client_builder->setHosts(['host' => 'localhost', 'port' => '9200']);

$client = $client_builder->build();

$param = [
    'index' => 'test',
    'body' => [
        "query" =>
            [
                'query_string' => [
                    'fields' => ['field1'],
                    'query' => 'AlreadyExpiredException NOT'
                ]
            ]
    ]
];
$result = $client->search($param);
print_r($result);

