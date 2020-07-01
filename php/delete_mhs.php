<?php
    $bulk = new MongoDB\Driver\Bulkwrite;

    $id = $_GET["id"];

    try {
        $bulk->delete(['_id' => new MongoDB\BSON\ObjectId($id)]);
        $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
        $result = $manager->executeBulkWrite('kampus.mahasiswa', $bulk);
        header("location: ../daftar_mhs.php");
    }catch(MongoDB\Driver\Exception\Exception $e){
    die("Error Encountered ".$e);
    }

?>