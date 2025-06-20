<?php include 'koneksi.php'; ?>
<h2>Data Produk Makanan</h2>
<a href="tambah.php">Tambah Produk</a>
<table border="1">
<tr>
  <th>Kode</th><th>Nama</th><th>Kategori</th><th>Harga</th><th>Kadaluarsa</th><th>Aksi</th>
</tr>
<?php
$sql = mysqli_query($koneksi, "SELECT * FROM produk_makanan");
while ($data = mysqli_fetch_array($sql)) {
    echo "<tr>
        <td>{$data['Kode_Produk']}</td>
        <td>{$data['Nama_Produk']}</td>
        <td>{$data['Kategori']}</td>
        <td>Rp " . number_format($data['Harga']) . "</td>
        <td>{$data['Tanggal_Kadaluarsa']}</td>
        <td>
            <a href='edit.php?id={$data['ID_Makanan']}'>Edit</a> |
            <a href='hapus.php?id={$data['ID_Makanan']}'>Hapus</a>
        </td>
    </tr>";
}
?>
</table>
