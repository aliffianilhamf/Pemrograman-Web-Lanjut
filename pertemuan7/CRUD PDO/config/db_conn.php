<?php

$servername = "localhost";
$dbname = "db_a11202214155";
$username  = "root";
$password  = "";


try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //Mode pelaporan kesalahan PDO. 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // menetapkan mode pengambilan default. Deskripsi mode dan cara menggunakannya tersedia di dokumentasi PDOStatement::fetch().
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Koneksi Gagal: " . $e->getMessage();
}
