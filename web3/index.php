<?php
$nama = "Raihan";        // GANTI DENGAN NAMA KAMU
$nim  = "H1H024056";      // GANTI DENGAN NIM KAMU

$db_host = getenv('DB_HOST') ?: 'db';
$db_name = getenv('DB_NAME') ?: 'responsi';
$db_user = getenv('DB_USER') ?: 'student';
$db_pass = getenv('DB_PASS') ?: 'student123';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    $data = "Gagal koneksi DB: " . $conn->connect_error;
} else {
    $sql = "SELECT nim, nama FROM students";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $data = $row['nim'] . " - " . $row['nama'];
    } else {
        $data = "Belum ada data di database";
    }
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Web 3</title>
</head>
<body>

<h1>WEB SERVER 3</h1>

<hr>

<p>
Nama Praktikan:
<strong><?= $nama ?></strong>
</p>

<p>
NIM:
<strong><?= $nim ?></strong>
</p>

<p>
Container:
<strong>WEB-3</strong>
</p>

<p>
Data dari Database:
<strong><?= $data ?></strong>
</p>

</body>
</html>
