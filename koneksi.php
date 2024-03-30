<?php
$host = "localhost";
$username = "username";
$password = "password";
$database = "perpustakaan";

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
?>
