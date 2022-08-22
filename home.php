<?php 
include "menu.php" ;
include "config.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="css/home.css">
<!--Script CSS-->
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.css" />
<!--Script Javascript-->
<script language="javascript" src="js/jquery-1.9.1.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Alfaris</title>
</head>

<body>
	<div id="home">
	<?php
		$totalmasuk = mysql_query("SELECT *, sum(nominal) FROM mst_masuk") or die(mysql_error());
		while ($nominal_msk = mysql_fetch_array($totalmasuk)) {
		echo "Total Saldo = Rp.";
		echo $nominal_msk['sum(nominal)'];
		}
	?>
	<br></br>
	<?php
		$totalkeluar = mysql_query("SELECT *, sum(nominal) FROM mst_keluar") or die(mysql_error());
		while ($nominal_ex = mysql_fetch_array($totalkeluar)) {
		echo "Total Uang Keluar = Rp.";
		echo $nominal_ex['sum(nominal)'];
		}
	?>
	</div>
</body>
</html>