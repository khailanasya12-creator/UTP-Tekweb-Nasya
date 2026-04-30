<?php
include 'koneksi.php';

$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$deskripsi_singkat = $_POST['deskripsi_singkat'];
$deskripsi_panjang = $_POST['deskripsi_panjang'];

$nama_file = $_FILES['gambar']['name'];
$tmp_file = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp_file, "image/".$nama_file);

$query = mysqli_query($koneksi, "INSERT INTO produk 
(nama_barang, harga, kategori, stok, gambar, deskripsi_singkat, deskripsi_panjang)
VALUES 
('$nama_barang','$harga','$kategori','$stok','$nama_file','$deskripsi_singkat','$deskripsi_panjang')");

if(!$query){
    die("Query error: ".mysqli_error($koneksi));
}

header("Location: produk.php");
?>