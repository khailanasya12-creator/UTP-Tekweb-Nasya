<?php
$koneksi = mysqli_connect("localhost", "root", "", "maroon_furniture");

if (!$koneksi) {
    die("Error: " . mysqli_connect_error());
}
?>