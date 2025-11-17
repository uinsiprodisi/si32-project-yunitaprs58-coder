<?php

$servername = "localhost";
$database = "uinsi 2441919031";
$username = "root";
$password ="";

// Buat Koneksi Database

$conn = mysqli_connect($servername,$username,$password,$database);

// Cek Koneksi

if (!$conn) {
    die("Koneksi Gagal".mysqli_connect_error());
}   
?>