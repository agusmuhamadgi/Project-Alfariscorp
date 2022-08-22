<?php 
include('config.php');
$id = $_GET['id'];
$query = mysql_query("delete from mst_keluar where no_id='$id'") or die(mysql_error());
if ($query) {
	header('location:keluar.php');
	}
?>