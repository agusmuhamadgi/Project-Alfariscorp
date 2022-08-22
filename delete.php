<?php 
include('config.php');

$id = $_GET['id'];

$query = mysql_query("delete from mst_masuk where no_id='$id'") or die(mysql_error());

if ($query) {
	header('location:masuk.php');
}
?>