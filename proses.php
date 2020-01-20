<?php
//cek button    
if ($_POST['Submit'] == "Submit") {
    $id_mahasiswa    = $_POST['id_mahasiswa'];
    $nama            = $_POST['nama'];
    $jurusan        = $_POST['jurusan'];
    $alamat          = $_POST['alamat'];
    $telepon        = $_POST['telepon'];

include 'koneksi.php';
// query SQL untuk insert data
$query="INSERT INTO db_mahasiswa SET ID='$nim',NAMA='$nama',JURUSAN='$jurusan',ALAMAT='$alamat',NOHP='$telepon'";
sqlsrv_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");

    }
    
?>
