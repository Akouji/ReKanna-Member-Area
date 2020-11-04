<?php
$host="localhost";
$user="neemyid_lab";
$password="bapakLoGaming";
$db="neemyid_lab";

$kon = mysqli_connect($host,$user,$password,$db);
if (!$kon){
	  die("Koneksi gagal:".mysqli_connect_error());
}
?>