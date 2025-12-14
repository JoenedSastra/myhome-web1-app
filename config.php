<?php
$server = "localhost";
$user = "root";
$pass = "";
$database="sistem_pengguna"; 
$conn = mysqli_connect($server, $user, $pass, $database);
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");
?>