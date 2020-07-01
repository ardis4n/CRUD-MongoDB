<?php

$bulk = new MongoDB\Driver\Bulkwrite;

$document1 = ['title' => 'one'];

$_id1 = $bulk->insert($document1);

var_dump($_id1);

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$result = $manager->executeBulkwrite("kampus.mahasiswa", $bulk);


?>