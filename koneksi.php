<?php
$host = 'db'; // Nama service MySQL di docker-compose.yml
$user = 'root';
$pass = 'root';
$db   = 'db_ilkom_rokania';

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>