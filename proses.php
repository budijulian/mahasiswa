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
$query="INSERT INTO mahasiswa SET id_mahasiswa='$nim',nama='$nama',jurusan='$jurusan',alamat='$alamat',telepon='$telepon'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");

    }
    
?>
