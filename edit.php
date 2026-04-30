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
<title>Edit Product</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.form-box {
  border: 1px solid #ccc;
  border-radius: 10px;
  padding: 30px;
  position: relative;
}

.btn-close-custom {
  position: absolute;
  top: 15px;
  right: 15px;
}

.btn-maroon {
  background-color: #800000;
  color: white;
}
</style>
</head>

<body>

<div class="container mt-5" style="max-width:600px;">

  <div class="form-box">

    <a href="produk.php" class="btn-close btn-close-custom"></a>

    <h3 class="text-center mb-4" style="color:#800000;">Edit Product</h3>

    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">

      <input type="hidden" name="id" value="<?php echo $d['id_barang']; ?>">

      <div class="mb-3">
        <label>Product Name</label>
        <input type="text" name="nama_barang" class="form-control" value="<?php echo $d['nama_barang']; ?>">
      </div>

      <div class="mb-3">
        <label>Price</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $d['harga']; ?>">
      </div>

      <div class="mb-3">
        <label>Categories</label>
        <select name="kategori" class="form-control">
          <option value="atk" <?php if($d['kategori']=='atk') echo 'selected'; ?>>Office Inventories</option>
          <option value="furniture" <?php if($d['kategori']=='furniture') echo 'selected'; ?>>Furniture</option>
        </select>
      </div>

      <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stok" class="form-control" value="<?php echo $d['stok']; ?>">
      </div>

      <div class="mb-3">
        <label>Image (don't need to add another image if it's the same product)</label>
        <input type="file" name="gambar" class="form-control">
      </div>

      <div class="mb-3">
        <label>Short Description</label>
        <textarea name="deskripsi_singkat" class="form-control"><?php echo $d['deskripsi_singkat']; ?></textarea>
      </div>

      <div class="mb-3">
        <label>Long Description</label>
        <textarea name="deskripsi_panjang" class="form-control"><?php echo $d['deskripsi_panjang']; ?></textarea>
      </div>

      <div class="text-center">
        <button type="submit" class="btn btn-maroon">Update</button>
      </div>

    </form>

  </div>

</div>

</body>
</html>