<?php

// Cek jika tombol simpan pada form tambah sudah di klik
if (!isset($_POST['add_category'])) {
  // Kembali ke halaman form tambah
  header('Location: index.php?hal=add-category');
  die();
}

// Menyimpan data POST yang dikirim dari form tambah kedalam variabel
$nama_kat = $_POST['nama_cat'];

// Menyiapkan Perintah Query untuk menyimpan data inputan
$query = "INSERT INTO category_tb (name) VALUES ('$nama_kat')";
// Eksekusi Perintah Query untuk menyimpan data kedalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

// Kembali ke halaman utama
header('Location: index.php?hal=add-category');
