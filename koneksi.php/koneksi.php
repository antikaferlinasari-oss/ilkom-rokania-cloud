<?php
$host = "db"; // Nama service di docker-compose.yml
$user = "root";
$pass = "root";
$db   = "db_ilkom_rokania";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi Database Gagal: " . mysqli_connect_error());
}
?>