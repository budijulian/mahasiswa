<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:mhsazureserver.database.windows.net,1433; Database = db_mahasiswa", "budijulian", "24Budi24");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
// $connectionInfo = array("UID" => "budijulian", "pwd" => "24Budi24", "Database" => "db_mahasiswa", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
// $serverName = "tcp:mhsazureserver.database.windows.net,1433";
// $conn = sqlsrv_connect($serverName, $connectionInfo);
?>
