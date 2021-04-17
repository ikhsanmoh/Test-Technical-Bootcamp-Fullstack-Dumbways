<?php
// Cek jika tombol update pada form update sudah di klik
if (!isset($_POST['update_category'])) {
  // Kembali ke halaman form
  header('Location: index.php?hal=edit-category');
  die();
}

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_POST['id'];
$category_name = $_POST['nama_category'];

// Menyiapkan Perintah Query untuk meng-update data
$query = "UPDATE category_tb SET name = '$category_name' WHERE id = '$id'";
// Eksekusi Perintah Query untuk menyimpan data kedalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

header('Location: index.php?hal=add-category');