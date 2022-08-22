<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
//tangkap data dari form
$id=$_POST['no_id'];
$perihal = $_POST['perihal'];
$pengirim= $_POST['pengirim'];
$nominal = $_POST['nominal'];
$tanggal = $_POST['tanggal'];
//simpan data ke database
$query = mysql_query("update mst_masuk set perihal='$perihal', pengirim='$pengirim', nominal='$nominal', tanggal='$tanggal' WHERE no_id='$id'") or die(mysql_error());
if ($query) {
	header('location:masuk.php');
}
?>