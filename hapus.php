<?php
include 'koneksi.php';

$id = $_GET['id'];

// optional: ambil nama file gambar dulu
$data = mysqli_query($koneksi, "SELECT gambar FROM produk WHERE id_barang='$id'");
$d = mysqli_fetch_array($data);

// hapus gambar dari folder
if($d['gambar'] != ""){
    unlink("image/".$d['gambar']);
}

// hapus dari database
mysqli_query($koneksi, "DELETE FROM produk WHERE id_barang='$id'");

// balik ke halaman produk
header("Location: produk.php");
?>