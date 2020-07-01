<?php
//try {

$mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    
    $stats = new MongoDB\Driver\Command(["dbstats" => 1]);
    $res = $mng->executeCommand("konsumen", $stats);
   
    $stats = curent($res->toArray());
   
       print_r($stats);
   ?>






