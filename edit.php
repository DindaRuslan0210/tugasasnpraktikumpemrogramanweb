<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM produk_makanan WHERE ID_Makanan=$id"));
?>

<h2>Edit Produk</h2>
<form method="post">
  Kode Produk: <input type="text" name="kode" value="<?= $data['Kode_Produk'] ?>"><br>
  Nama Produk: <input type="text" name="nama" value="<?= $data['Nama_Produk'] ?>"><br>
  Kategori: <input type="text" name="kategori" value="<?= $data['Kategori'] ?>"><br>
  Harga: <input type="number" name="harga" value="<?= $data['Harga'] ?>"><br>
  Tanggal Kadaluarsa: <input type="date" name="kadaluarsa" value="<?= $data['Tanggal_Kadaluarsa'] ?>"><br>
  <input type="submit" value="Update">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $tgl = $_POST['kadaluarsa'];

    mysqli_query($koneksi, "UPDATE produk_makanan SET 
        Kode_Produk='$kode',
        Nama_Produk='$nama',
        Kategori='$kategori',
        Harga='$harga',
        Tanggal_Kadaluarsa='$tgl'
        WHERE ID_Makanan=$id");

    header("Location: index.php");
}
?>
