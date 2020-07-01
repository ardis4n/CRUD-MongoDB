<a href="../daftar_mhs.php">daftar mahasiswa</a>
<?php
$bulk = new MongoDB\Driver\Bulkwrite;

$Nama = $_POST["Nama"];
$Nim = $_POST["Nim"];
$Ipk = $_POST["Ipk"];
$Jurusan = $_POST["Jurusan"];

$user = [
'_id' => New MongoDB\BSON\objectId,
'Nama' => $Nama, 
'Nim' => $Nim, 
'Ipk' => $Ipk, 
'Jurusan' => $Jurusan
];


try{
$bulk->insert($user);
$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$result = $manager->executeBulkwrite('kampus.mahasiswa', $bulk);
echo "berhasil ditambahkan";
} catch(MongoDB\Driver\Exception\Exception $e) {
    die ("error encountered: ".$e);
}

?>