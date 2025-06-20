CREATE DATABASE IF NOT EXISTS db_makanan;
USE db_makanan;

CREATE TABLE produk_makanan (
  ID_Makanan INT AUTO_INCREMENT PRIMARY KEY,
  Kode_Produk VARCHAR(20),
  Nama_Produk VARCHAR(100),
  Kategori VARCHAR(50),
  Harga INT,
  Tanggal_Kadaluarsa DATE
);
