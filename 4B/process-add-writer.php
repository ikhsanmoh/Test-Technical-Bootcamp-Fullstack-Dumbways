<?php

// Cek jika tombol simpan pada form tambah sudah di klik
if (!isset($_POST['add_writer'])) {
  // Kembali ke halaman form tambah
  header('Location: index.php?hal=add-writer');
  die();
}

// Menyimpan data POST yang dikirim dari form tambah kedalam variabel
$nama_writer = $_POST['nama_writer'];

// Menyiapkan Perintah Query untuk menyimpan data inputan
$query = "INSERT INTO writer_tb (name) VALUES ('$nama_writer')";
// Eksekusi Perintah Query untuk menyimpan data kedalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

// Kembali ke halaman utama
header('Location: index.php?hal=add-writer');
