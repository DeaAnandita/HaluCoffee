<?php
// koneksi database
include 'dbConnection.php';

// menangkap data yang di kirim dari form
$nama_pelanggan = $_POST['nama_pelanggan'];
$no_meja = $_POST['no_meja']; 

// menginput data ke database
$q = mysqli_query($koneksi, "INSERT INTO tb_pelanggan (nama_pelanggan, no_meja) VALUES ('$nama_pelanggan', '$no_meja')");

// mengalihkan halaman kembali ke index.php 
header("location:menu.php");

?>