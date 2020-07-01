<a href=form_mhs.php>tambah baru</a> <br>
<?php

try{
$manager = new MongoDB\Driver\Manager('mongodb://localhost:27017');
$query = new MongoDB\Driver\Query([]);

$rows = $manager->executeQuery("kampus.mahasiswa", $query);

echo "<table>
     <thead>
     <th>Nama</th>
     <th>Nim</th>
     <th>Ipk</th>
     <th>Jurusan</th>
     <th>Aksi</th>
     </thead>";

     foreach($rows as $row){
        echo "<tr>".
                "<td>".$row->Nama."</td>".
                "<td>".$row->Nim."</td>".
                "<td>".$row->Ipk."</td>".
                "<td>".$row->Jurusan."</td>".
                "<td><a href='edit_mhs.php?id=".$row->_id.
                "&Nama=".$row->Nama.
                "&Nim=".$row->Nim.
                "&Ipk=".$row->Ipk.
                "&Jurusan=".$row->Jurusan.
                "'>Edit</a> | ".
                "<a href='php/delete_mhs.php?id=$row->_id'>delete></a></td>".
                "</tr>";
     }

     echo"</table>";
}    catch(MongoDB\Driver\Exception\Exception $e) {
         die("Error Encountered: ".$e);
}
?>