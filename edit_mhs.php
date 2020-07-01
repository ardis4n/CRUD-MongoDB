<form action="php/update_mhs.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">   
    Nama: <input type="text" name="Nama" value="<?php echo $_GET["Nama"]; ?>"> <br> 
    Nim: <input type="text" name="Nim" value="<?php echo $_GET["Nim"]; ?>"> <br>
    Ipk: <input type="text" name="Ipk" value="<?php echo $_GET["Ipk"]; ?>"> <br>
    Jurusan: <input type="text" name="Jurusan" value="<?php echo $_GET["Jurusan"]; ?>"> <br>
    <input type="submit" value="UPDATE">
</form>