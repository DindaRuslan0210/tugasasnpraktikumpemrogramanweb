<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($koneksi, "DELETE FROM produk_makanan WHERE ID_Makanan = $id");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal menghapus data.";
    }
} else {
    echo "ID tidak ditemukan di URL.";
}
?>
