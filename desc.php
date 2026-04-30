<?php 
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE id_barang='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Product Detail</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .brand-text {
    font-weight: bold;
    color: #800000;
  }

  .btn-maroon {
    background-color: #800000;
    color: white;
  }

  .product-img {
    width: 100%;
    height: 350px;
    object-fit: cover;
  }
</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="image/logo.jpg" width="60" class="me-2">
      <span class="brand-text">Maroon Furniture</span>
    </a>
  </div>
</nav>

<!-- DETAIL -->
<div class="container mt-5">
  <div class="row">

    <!-- GAMBAR -->
    <div class="col-md-6">
      <img src="image/<?php echo $d['gambar']; ?>" class="product-img">
    </div>

    <!-- DESKRIPSI -->
    <div class="col-md-6">
      <h2 style="color:#800000;"><?php echo $d['nama_barang']; ?></h2>
      <h4 class="mt-3">Rp <?php echo $d['harga']; ?></h4>

      <p class="mt-4">
        <?php echo $d['deskripsi_panjang']; ?>
      </p>

      <a href="produk.php?kategori=<?php echo $d['kategori']; ?>" class="btn btn-maroon mt-3">
        Back
      </a>
    </div>

  </div>
</div>

</body>
</html>