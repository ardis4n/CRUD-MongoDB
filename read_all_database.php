<?php
try{
    $mng = new MongoDB\Driver\Manager("mongodb://localhost:27017");
    $query = new MongoDB\Driver\Query([]); 
     
    $rows = $mng->executeQuery("kampus.mahasiswa", $query);
    
    foreach ($rows as $row) {
        echo "nama: ".$row->nama.", Nim: ".$row->Nim.", Ipk: ".$row->Ipk.", jurusan: ".$row->jurusan."<br>";
    }
}catch(MongoDB\Driver\Exception\Exception $e){
	$filename = basename(__FILE__);
	
	echo "The $filename script has experienced an error.\n";
	echo "It failed with the following exception:\n";
	echo "Exception: ".$e->getMessage()."\n";
	echo "In file: ".$e->getFile()."\n";
	echo "In line: ".$e->getLine()."\n";
}
?>