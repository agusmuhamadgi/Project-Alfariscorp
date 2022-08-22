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
<!--Kalender 
		<link type="text/css" rel="stylesheet" href="development-bundle/themes/ui-lightness/ui.all.css" />
		<script src="development-bundle/jquery-1.8.0.min.js"></script>
		<script src="development-bundle/ui/ui.core.js"></script>
		<script src="development-bundle/ui/ui.datepicker.js"></script>
		<script src="development-bundle/ui/i18n/ui.datepicker-id.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#tanggal").datepicker({
				dateFormat : "yy-mm-dd",
				changeMonth : true,
				changeYear : true
			});
		});
		-->
		</script>

		<!-- Confirm Delete-->
</head>
<body>
<div id="search">
	
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="pencarian" id="pencarian">  
	  <table>
	  <tr>
	  <td><strong>PENCARIAN:</strong></td>
	  <td><input type="date" name="search" id="pengirim" required="required" /></td>
	  <td><button class="btn btn-primary" type="sumbit" name="submit" id="submit">Cari</button></td>
	   
	  </tr>
	  </table> 
	</form> 
<div id="isi2">
			<div style="padding:3px;overflow:auto;width:auto;height:500px;border:0px solid blue" >
			<div class="table table-striped">
			<table border="1" cellpadding="5" cellspacing="0" class="table">
				<thead>
			    
			    	<tr>
			        	<td><center>No.</center></td>
			        	<td><center>Perihal</center></td>
			        	<td><center>Pengirim</center></td>
			        	<td><center>Nominal</center></td>
			        	<td><center>Tanggal</center></td>
			        </tr>
			    </thead>
			    <tbody>
				<?php
				$search=isset($_POST['search'])?$_POST['search']:"";
				$sql=" SELECT *	FROM mst_masuk	WHERE  pengirim LIKE '%{$search}%'" ;

				$totalmasuk = mysql_query("SELECT *, sum(nominal) FROM mst_masuk WHERE pengirim='%{$search}%'") or die(mysql_error());
				while ($nominal_msk = mysql_fetch_array($totalmasuk)) {

				}
				$result = mysql_query($sql) or die (mysql_error());
				$no = 1;
				while ($data = mysql_fetch_array($result)) {
				?>
				<tr>
				<td><?php echo ($no++); ?></td>
				<td width="600px"><?php echo $data['perihal']; ?></td>
				<td><?php echo $data['pengirim']; ?></td>
				<td><?php echo $data['nominal']; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				</tr>
				<?php
				}
				?>
			    </tbody>
			</table>
			</div>
			</div>
			</div>
			</div>
            <div id="footer"> <!--koding untuk  mnjumlahkan total pembayaran per perusahaan-->
            	<?php
		$totalmasuk = mysql_query("SELECT *, sum(nominal) FROM mst_masuk WHERE pengirim LIKE '%{$search}%'") or die(mysql_error());
		while ($nominal_msk = mysql_fetch_array($totalmasuk)) {
		echo "Total Saldo = Rp.";
		echo $nominal_msk['sum(nominal)'];
		}
	?>
            </div>
</body>
</html>