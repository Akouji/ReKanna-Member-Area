<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id           = $_POST['id'];
  $versi        = $_POST['versi'];
  $keterangan   = $_POST['keterangan'];
  $link         = $_POST['link'];
  $tanggal      = $_POST['tanggal'];
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE rekanna SET versi = '$versi', keterangan = '$keterangan', link = '$link', tanggal = '$tanggal'";
      $query .= "WHERE id = '$id'";
      $result = mysqli_query($kon, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($kon).
                             " - ".mysqli_error($kon));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='/admin/index.php';</script>";
      }