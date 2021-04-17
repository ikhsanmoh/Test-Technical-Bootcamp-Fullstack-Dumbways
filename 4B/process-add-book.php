<?php

// Cek jika tombol simpan pada form tambah sudah di klik
if (!isset($_POST['add_book'])) {
  // Kembali ke halaman form tambah
  header('Location: index.php?hal=add-book');
  die();
}

// Menyimpan data POST yang dikirim dari form tambah kedalam variabel
$nama_buku = $_POST['nama_buku'];
$kat_id = $_POST['category'];
$penulis_id = $_POST['writer'];
$tahun = $_POST['publication'];
$img = isset($_POST['img']) && !empty($_POST['img']) ? $_POST['img'] : 'no_image.jpg';

// Menyiapkan Perintah Query untuk menyimpan data inputan
$query = "INSERT INTO book_tb (name, category_id, writer_id, publication_year, img) VALUES ('$nama_buku', '$kat_id', '$penulis_id', '$tahun', '$img')";
// Eksekusi Perintah Query untuk menyimpan data kedalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

// Kembali ke halaman utama
header('Location: index.php');
