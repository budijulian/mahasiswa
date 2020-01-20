<?php
//cek button    
if ($_POST['Submit'] == "Submit") {
    $id    = $_POST['id_mahasiswa'];
    $nama            = $_POST['nama'];
    $jurusan        = $_POST['jurusan'];
    $alamat          = $_POST['alamat'];
    $telepon        = $_POST['telepon'];

include 'koneksi.php';
// query SQL untuk insert data
$query="INSERT INTO db_mahasiswa SET ID='$id',NAMA='$nama',JURUSAN='$jurusan',ALAMAT='$alamat',NOHP='$telepon'";
sqlsrv_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:index.php");

    }
    
?>
