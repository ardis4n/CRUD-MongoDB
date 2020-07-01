<?php

try{

    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $query = new MongoDB\Driver\Query([]);

    $rows = $mng->executeQuery("konsumen.pelangganTetap", $query);

    foreach ($rows as $row) {

        echo "$row->_id : $row->title"."<br/>";
    }

    } catch (MongoDB\Driver\Exception\Exception $e) 
    
    {

        $filename = basename(__file__);

        echo "The $fillename script has experienced an error.\n";
        echo "It failed with the following exception:\n";

        echo "Exception:", $e->getMessage(), "\n";
        echo "In File:", $e->getFile(), "\n";
        echo "Online:", $e->getLine(), "\n";

}


?>