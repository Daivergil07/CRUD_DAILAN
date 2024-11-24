<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mahasiswa";


$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    error_log("Koneksi gagal: " . $conn->connect_error);
    die("Koneksi gagal. Silakan coba lagi nanti.");     
}

