<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maroon Furniture</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .brand-text {
        font-size: 28px;
        font-weight: bold;
        color: #800000; 
      }
      .carousel-item img {
        height: 400px;
        object-fit: contain; /* biar nggak kepotong */
        background-color: #f8f9fa; /* biar ada background kalau kosong */
      }

      .carousel-control-prev,
      .carousel-control-next {
        filter: invert(100%); /* biar tombol keliatan (putih) */
     }

      .btn-maroon {
       background-color: #800000;
        color: white;
        border: none;
     }

      .btn-maroon:hover {
        background-color: #660000;
        color: white;
    }

      .navbar-maroon .navbar-brand,
      .navbar-maroon .nav-link {
       color: white !important;
    }

    .section-highlight {
      background-color: #722f37;
      padding: 60px 20px;
      border-radius: 10px;
    }
    </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-dark" style="background-color: #722f37;">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="image/logo.jpg" width="60" class="me-2">
      <span class="brand-text text-white">Maroon Furniture</span>
    </a>
  </div>
</nav>

<div style="position: relative;">

  <!-- BUTTON -->
  <a href="produk.php" 
     class="btn btn-maroon"
     style="
       position: absolute;
       top: 15px;
       right: 15px;
       z-index: 10;
       padding: 6px 12px;
       font-size: 14px;
     ">
    Another Products
  </a>

</div>

<!-- CAROUSEL -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">

  <!-- INDICATORS -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"></button>
  </div>

  <!-- INNER WAJIB -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="image/meja-rapat.jpg" class="d-block w-100">
       <div class="carousel-caption">
    <h2>Meeting Table</h2>
    <p>Elegant meeting table for productive discussions.</p>
    <a href="desc.php?id=7" class="btn btn-maroon">Go to Product</a>
      </div>
  </div>

    <div class="carousel-item">
      <img src="image/kursi.jpg" class="d-block w-100">
       <div class="carousel-caption">
    <h2>Office Chair</h2>
    <p>Comfortable ergonomic chair for long working hours.</p>
    <a href="desc.php?id=10" class="btn btn-maroon">Go to Product</a>
  </div>

</div>

    <div class="carousel-item">
      <img src="image/meja-pimpinan.jpg" class="d-block w-100">
       <div class="carousel-caption">
    <h2>Executive Table</h2>
    <p>Premium desk with a sophisticated and professional look.</p>
    <a href="desc.php?id=9" class="btn btn-maroon">Go to Product</a>
  </div>

</div>

    <div class="carousel-item">
      <img src="image/set-meja-dengan-infokus.jpg" class="d-block w-100">
       <div class="carousel-caption">
    <h2>Set Table (include projector)</h2>
    <p>Complete meeting table set with integrated projector support.</p>
    <a href="desc.php?id=6" class="btn btn-maroon">Go to Product</a>
  </div>

</div>
    </div>

  </div>
  <div class="container mt-5">

  <!-- TAGLINE -->
  <div class="section-highlight">
  <div class="text-center mb-5">
    <h2 style="color: white; font-weight:bold;">
     Modern & Elegant Furniture Solutions.
    </h2>
    <p class="mt-3 text-muted"></p>
    <p style="color: white;">Find various quality furniture options to supplement your home and office needs.
    </p>
  </div>

  <!-- KEUNGGULAN -->
  <div class="row text-center">

    <div class="col-md-4 mb-4">
      <h5 style="color: white;">Premium Quality.</h5>
      <p style="color: white;">Made from the finest materials with modern and durable designs.</p>
    </div>

    <div class="col-md-4 mb-4">
      <h5 style="color: white;">Elegant Design.</h5>
      <p style="color: white;">A stylish look suitable for various interior concepts.</p>
    </div>

    <div class="col-md-4 mb-4">
      <h5 style="color: white;">Affordable Price.</h5>
      <p style="color: white;">High Quality at a friendly price.</p>
    </div>

  </div>
</div>
  <!-- BUTTON KE PRODUK -->
  <div class="text-center mt-4">
    <a href="ulasan.php" class="btn btn-maroon">View all reviews</a>
  </div>

</div>
  <!-- BUTTON -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>

</div>

<!-- Bootstrap JS (WAJIB buat carousel) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>