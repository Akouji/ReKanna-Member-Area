<?php
include '../koneksi.php';
$id_user = $_GET["id_user"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM users WHERE id_user='$id_user' ";
    $hasil_query = mysqli_query($kon, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($kon).
       " - ".mysqli_error($kon));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='/admin/index.php';</script>";
    }