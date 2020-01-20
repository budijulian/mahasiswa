<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Data Mahasiswa | Tambah Data</title>
    <!-- Tell the browser to be responsive to screen width -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
    <div class="container mt-5">
        <form action="proses.php" method="POST">
            <div class="col col-sm-12">
                <div class="form-group">
                        <h2 class="text-success text-center">FORM TAMBAH DATA MAHASISWA</h2>
                </div>
                <div class="form-group">
                    <td>ID Mahasiswa / NIM</td>
                    <td><input class="form-control" type="text" name="id_mahasiswa" size="35" maxlength="6" /></td>
                </div>
                <div class="form-group">

                    <td>Nama</td>
                    <td><input class="form-control" type="text" name="nama" size="50" maxlength="30" /></td>
                </div>
                <div class="form-group">

                    <td>Jurusan</td>
                    <td><select class="form-control" name="jurusan">
                            <option value="-">- Pilih Jurusan -
                            <option value="Teknik Komputer">Teknik Komputer
                            <option value="Teknik Informatika">Teknik Informatika
                            <option value="Teknik Mesin">Teknik Mesin
                            <option value="Teknik Elektro">Teknik Elektro
                            <option value="Komputer Akuntansi">Komputer Akuntansi
                        </select></td>
                </div>
                <div class="form-group">
                    <td> </td>
                    <td>Alamat</td>
                    <td><input class="form-control" type="text" name="alamat" size="50" maxlength="30" /></td>
                </div>
                <div class="form-group">
                    <td> </td>
                    <td>No. Telp</td>
                    <td><input class="form-control" type="text" name="telepon" size="20" maxlength="12" /></td>
                </div>
                <div class="form-group">
                    <td> </td>
                    <td> </td>
                    <td><input class="btn btn-primary" type="submit" type="button" name="Submit" value="Submit">
                        <input class="btn btn-danger" type="reset" type="button" name="reset" value="Cancel"></td>
                </div>
            </div>
        </form>
        
                <table class="table table-stripped">


                    <thead>


                        <tr>


                            <th scope="col">Nama</th>


                            <th scope="col">Nama Barang</th>


                            <th scope="col">Satuan</th>


                            <th scope="col" width="200px">Action</th>


                        </tr>


                    </thead>


                    <tbody>


                        <?php


                        include "koneksi.php";


                        $tsql = "Select * From db_mahasiswa";


                        $stmt = sqlsrv_query( $conn, $tsql);



                        do {


                  while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {                                  


                                ?>


                                <tr>


                                    <td><?= $row['ID'];?></td>


                                    <td><?= $row['NAMA'];?></td>


                                    <td><?= $row['JURUSAN'];?></td>
<td><?= $row['ALAMAR'];?></td>
<td><?= $row['NOHP'];?></td>
                               


                                </tr>


                                <?php


                            }


                        } while ( sqlsrv_next_result($stmt) );


                        ?>


                    </tbody>


                </table>  
    </div>
    
</body>

</html>
