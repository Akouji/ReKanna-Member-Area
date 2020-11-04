<?php
//Include file koneksi ke database
include "../../koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$username=$_POST["username"];
$nama=$_POST["nama"];
$email=$_POST["email"];
$level=$_POST["level"];
$code=md5($_POST["code"]); //untuk password digunakan enskripsi md5


//Query input menginput data kedalam tabel anggota
  $sql="insert into users (username,nama,email,level,code) values
		('$username','$nama','$email','$level','$code')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>alert('Data berhasil ditambahkan.');window.location='/admin/index.php';</script>";
	exit;
  }
else {
	echo "<script>alert('Data gagal ditambahkan.');window.location='/admin/index.php';</script>";
	exit;
}  

?>