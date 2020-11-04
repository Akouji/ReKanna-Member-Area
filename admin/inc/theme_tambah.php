<?php
//Include file koneksi ke database
include "../../koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$versi=$_POST["versi"];
$keterangan=$_POST["keterangan"];
$link=$_POST["link"];
$tanggal=$_POST["tanggal"];


//Query input menginput data kedalam tabel anggota
  $sql="insert into rekanna (versi,keterangan,link,tanggal) values
		('$versi','$keterangan','$link','$tanggal')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

//Kondisi apakah berhasil atau tidak
  if ($hasil) {
	echo "<script>alert('Data berhasil disimpan.');window.location='/admin/index.php';</script>";
	exit;
  }
else {
	echo "<script>alert('Data gagal disimpan.');window.location='/admin/index.php';</script>";
	exit;
}  

?>