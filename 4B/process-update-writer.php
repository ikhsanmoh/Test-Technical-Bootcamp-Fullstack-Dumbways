<?php
// Cek jika tombol update pada form update sudah di klik
if (!isset($_POST['update_writer'])) {
  // Kembali ke halaman form
  header('Location: index.php?hal=edit-writer');
  die();
}

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_POST['id'];
$writer_name = $_POST['nama_writer'];

// Menyiapkan Perintah Query untuk meng-update data
$query = "UPDATE writer_tb SET name = '$writer_name' WHERE id = '$id'";
// Eksekusi Perintah Query untuk menyimpan data kedalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

header('Location: index.php?hal=add-writer');