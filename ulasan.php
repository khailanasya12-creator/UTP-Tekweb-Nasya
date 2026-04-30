<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ulasan - Maroon Furniture</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .brand-text {
      font-size: 28px;
      font-weight: bold;
      color: #800000;
    }

    .review-card {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 20px;
      height: 100%;
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

<!-- CONTENT -->
<div class="container mt-5">

  <h2 class="text-center mb-5" style="color:#800000;">Customers Reviews</h2>

  <div class="row">

    <div class="col-md-4 mb-4">
      <div class="review-card text-center">
        <p>"These Products are insane! Be highly satisfied with the quality of."</p>
        <h6>- Jacob</h6>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="review-card text-center">
        <p>"Quick delivery and friendly service."</p>
        <h6>- Jane</h6>
      </div>
    </div>

    <div class="col-md-4 mb-4">
      <div class="review-card text-center">
        <p>"The design is modern, my office looks way too good."</p>
        <h6>- Mike</h6>
      </div>
    </div>

  </div>

</div>

</body>
</html>