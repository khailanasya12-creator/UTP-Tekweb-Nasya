<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Product</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.btn-maroon {
  background-color: #800000;
  color: white;
}
.btn-maroon:hover {
  background-color: #660000;
  color: white;
}

.form-box {
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 30px;
  position: relative;
  background-color: #fff;
}

.btn-close-custom {
  position: absolute;
  top: 15px;
  right: 15px;
}

</style>
</head>

<body>

<div class="container mt-5" style="max-width:600px;">
   <div class="form-box">
     <a href="produk.php" class="btn-close btn-close-custom"></a>

  <h3 class="text-center mb-4" style="color:#800000;">Add Product</h3>
  <form action="proses_tambah.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">
      <label>Product Name</label>
      <input type="text" name="nama_barang" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Price</label>
      <input type="number" name="harga" class="form-control" required>
    </div>

    <div class="mb-3">
      <label>Categories</label>
      <select name="kategori" class="form-control">
        <option value="atk">Office Inventories</option>
        <option value="furniture">Furniture</option>
      </select>
    </div>

    <div class="mb-3">
      <label>Stock</label>
      <input type="number" name="stok" class="form-control">
    </div>

    <div class="mb-3">
      <label>Image</label>
      <input type="file" name="gambar" class="form-control">
    </div>

    <div class="mb-3">
      <label>Short Description</label>
      <textarea name="deskripsi_singkat" class="form-control"></textarea>
    </div>

    <div class="mb-3">
      <label>Long Description</label>
      <textarea name="deskripsi_panjang" class="form-control"></textarea>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-maroon">Add</button>
    </div>

  </form>
</div>
</div>

</body>
</html>