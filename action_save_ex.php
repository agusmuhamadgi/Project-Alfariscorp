<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

// Fungsi untuk Merubah susunan format tanggal


 
//tangkap data dari form
$perihal = $_POST['perihal'];
$pengirim = $_POST['pengirim'];
$nominal = $_POST['nominal'];
$tanggal = $_POST['tanggal'];

// Cara penggunaan function ubahTgl
//$ubahtgl = ubahformatTgl($tanggal);

//simpan data ke database
$query = mysql_query("insert into mst_keluar values('', '$perihal', '$pengirim', '$nominal', '$tanggal')") or die(mysql_error());

if ($query) {
	header('location:keluar.php');
}
?>