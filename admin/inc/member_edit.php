<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../koneksi.php';

	// membuat variabel untuk menampung data dari form
  $id_user       = $_POST['id_user'];
  $username      = $_POST['username'];
  $nama          = $_POST['nama'];
  $email         = $_POST['email'];
  $level         = $_POST['level'];
  $code          = md5($_POST['code']);
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE users SET username = '$username', nama = '$nama', email = '$email', level = '$level', code = '$code'";
      $query .= "WHERE id_user = '$id_user'";
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