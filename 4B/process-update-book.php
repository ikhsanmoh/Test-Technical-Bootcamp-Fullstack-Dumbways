<?php
// Cek jika tombol update pada form update sudah di klik
if (!isset($_POST['update_book'])) {
  // Kembali ke halaman form
  header('Location: index.php');
  die();
}

// Menyimpan id yg akan diupdate kedalam variabel
$id = $_POST['id'];
$nama_buku = $_POST['nama_buku'];
$kat_id = $_POST['category'];
$penulis_id = $_POST['writer'];
$tahun = $_POST['publication'];
$img = isset($_POST['img']) && !empty($_POST['img']) ? $_POST['img'] : 'no_image.jpg';

// Menyiapkan Perintah Query untuk meng-update data
$query = "UPDATE book_tb SET name = '$nama_buku', category_id = '$kat_id', writer_id = '$penulis_id', publication_year = '$tahun', img = '$img' WHERE id = '$id'";
// Eksekusi Perintah Query untuk menyimpan data kedalam database
$execQuery = mysqli_query($db, $query) or die('Kesalahan pada Perintah Query: ' . mysqli_error($db)); // Jika Query gagal di eksekusi maka akan tampil pesan Error

header('Location: index.php');