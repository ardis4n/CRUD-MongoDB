<?php
$bulk = new MongoDB\Driver\Bulkwrite;

$id = $_POST ["id"];
$Nama = $_POST["Nama"];
$Nim = $_POST["Nim"];
$Ipk = $_POST["Ipk"];
$Jurusan = $_POST["Jurusan"];

try {
    $bulk->update(['_id' => New MongoDB\BSON\ObjectId($id)],
    [
        'Nama' => $Nama,
        'Nim' => $Nim,
        'Ipk' => $Ipk,
        'Jurusan' => $Jurusan
    ]);
    $manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
    $result = $manager->executeBulkWrite('kampus.mahasiswa', $bulk);
    header("location: ../daftar_mhs.php");
    }catch(MongoDB\Driver\Exception\Exception $e){
        die("Error Encountered; ".$e);
}

?>
