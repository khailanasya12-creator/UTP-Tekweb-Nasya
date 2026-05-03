<?php include 'koneksi.php'; 
$kategori = isset($_GET['kategori']) ? $_GET['kategori'] : 'atk';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Produk - Maroon Furniture</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .brand-text {
    font-weight: bold;
    color: #800000;
  }

  .btn-maroon {
    background-color: #800000;
    color: white;
    border: none;
  }

  .btn-maroon:hover {
    background-color: #660000;
  }

  .card img {
    height: 180px;
    object-fit: cover;
  }

  .navbar-maroon {
    background-color: #722f37 !important;
  }

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-maroon navbar-dark">
  <div class="container-fluid d-flex justify-content-between">
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="image/logo.jpg" width="50" class="me-2">
     <span class="brand-text text-white">Maroon Furniture</span>
    </a>

    <!-- BUTTON CRUD -->
    <div class="btn-group">
      <a href="tambah.php" class="btn btn-maroon btn-sm">+ Add Another Product</a>
    </div>

  </div>
</nav>
<!-- TITLE -->
<div class="container mt-4 text-center">
  <h2 class="display-6" style="color:#800000;">OUR PRODUCT</h2>
</div>

<!-- BUTTON -->
<div class="container text-center mt-4">
  <div class="btn-group">
    <a href="produk.php?kategori=atk" 
       class="btn <?php echo ($kategori=='atk') ? 'btn-maroon' : 'btn-outline-dark'; ?>">
       Office Inventories
    </a>

    <a href="produk.php?kategori=furniture" 
       class="btn <?php echo ($kategori=='furniture') ? 'btn-maroon' : 'btn-outline-dark'; ?>">
       Furniture
    </a>
  </div>
</div>

<!-- PRODUK -->
<div class="container mt-4">
  <div class="row">

<?php
$data = mysqli_query($koneksi, "SELECT * FROM produk WHERE kategori='$kategori'");

while($d = mysqli_fetch_array($data)){
?>

<div class="col-md-3 mb-4">
  <div class="card h-100">
    <img src="image/<?php echo $d['gambar']; ?>">
    <div class="card-body">
      <h5><?php echo $d['nama_barang']; ?></h5>
      <p><?php echo $d['deskripsi_singkat']; ?></p>
      <div class="text-center mt-3">
        <a href="desc.php?id=<?php echo $d['id_barang']; ?>" class="btn btn-maroon">
          More...
        </a>
         <a href="edit.php?id=<?php echo $d['id_barang']; ?>" class="btn btn-maroon">Edit</a>
        
         <a href="hapus.php?id=<?php echo $d['id_barang']; ?>" class="btn btn-danger btn-sm"
         onclick="return confirm('Yakin mau hapus produk ini?')">Hapus</a>
      </div>
    </div>
  </div>
</div>

<?php } ?>

  </div>
</div>

</body>
</html>