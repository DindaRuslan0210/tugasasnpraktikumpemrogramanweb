<form method="post">
  Kode Produk: <input type="text" name="kode_produk"><br>
  Nama Produk: <input type="text" name="nama_produk"><br>
  Kategori: <input type="text" name="kategori"><br>
  Harga: <input type="number" name="harga"><br>
  Tanggal Kadaluarsa: <input type="date" name="tanggal_kadaluarsa"><br>
  <input type="submit" value="Simpan">
</form>

<?php
include 'koneksi.php';
if ($_POST) {
    $kode = $_POST['kode_produk'];
    $nama = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $tgl = $_POST['tanggal_kadaluarsa'];
    mysqli_query($koneksi, "INSERT INTO produk_makanan 
      (kode_produk, nama_produk, kategori, harga, tanggal_kadaluarsa)
      VALUES ('$kode', '$nama', '$kategori', '$harga', '$tgl')");
    header("Location: index.php");
}
?>
