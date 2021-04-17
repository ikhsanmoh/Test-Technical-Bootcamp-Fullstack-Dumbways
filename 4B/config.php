<?php

// Untuk Koneksi Database
$host = 'localhost'; // nama server
$user = 'root'; //username
$pass = ''; // password
$dbname = 'db_bootcamp_dumb_library'; // nama database

// Menjalankan koneksi dengan database
$db = new mysqli($host, $user, $pass, $dbname);

// Cek jika koneksi ke Database Gagal
if (!$db) {
  // Menampilkan pesan error karena gagal melakukan koneksi
  die("Gagal Terhubung Dengan Database" . mysqli_connect_error());
}