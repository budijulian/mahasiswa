<?php   

    $id    = $_POST['id_mahasiswa'];
    $nama            = $_POST['nama'];
    $jurusan        = $_POST['jurusan'];
    $alamat          = $_POST['alamat'];
    $telepon        = $_POST['telepon'];

include 'koneksi.php';
// query SQL untuk insert data
$query="INSERT INTO db_mahasiswa VALUES ('$id','$nama','$jurusan','$alamat','$telepon')";
sqlsrv_query($conn, $query);
// mengalihkan ke halaman index.php
header("location:index.php");

   
?>
