<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$deskripsi_singkat = $_POST['deskripsi_singkat'];
$deskripsi_panjang = $_POST['deskripsi_panjang'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

// kalau upload gambar baru
if($gambar != ""){
    move_uploaded_file($tmp, "image/".$gambar);

    mysqli_query($koneksi, "UPDATE produk SET
    nama_barang='$nama_barang',
    harga='$harga',
    kategori='$kategori',
    stok='$stok',
    gambar='$gambar',
    deskripsi_singkat='$deskripsi_singkat',
    deskripsi_panjang='$deskripsi_panjang'
    WHERE id_barang='$id'");
} else {
    // kalau gambar tidak diganti
    mysqli_query($koneksi, "UPDATE produk SET
    nama_barang='$nama_barang',
    harga='$harga',
    kategori='$kategori',
    stok='$stok',
    deskripsi_singkat='$deskripsi_singkat',
    deskripsi_panjang='$deskripsi_panjang'
    WHERE id_barang='$id'");
}

header("Location: produk.php");
?>