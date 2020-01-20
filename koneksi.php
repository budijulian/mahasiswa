<?php

$koneksi = sqlsrv_connect("mahasiswaazureserver","budijulian","24Budi24","db_mahasiswa");
 
// Check connection
if ($koneksi){
	echo " Koneksi  berhasil";
}
else{
    echo " KOneksi tidak Berhasil"; die(print_r(sqlsrv_errors(),true));
}
