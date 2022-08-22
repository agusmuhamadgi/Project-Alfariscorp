<?php 
function xlsBOF() {
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
return;
}

function xlsEOF() {
echo pack("ss", 0x0A, 0x00);
return;
}

function xlsWriteNumber($Row, $Col, $Value) {
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
echo pack("d", $Value);
return;
}

function xlsWriteLabel($Row, $Col, $Value ) {
$L = strlen($Value);
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
echo $Value;
return;
}

include "config.php";

$queabsdetail = "SELECT * FROM mst_keluar order by no_id asc";
$exequeabsdetail = mysql_query($queabsdetail);
while($res = mysql_fetch_array($exequeabsdetail)){

	$data['no_id'][] = $res['no_id'];
	$data['perihal'][] = $res['perihal'];
	$data['pengirim'][] = $res['pengirim'];
	$data['nominal'][] = $res['nominal'];
	$data['nominal'][] = $res['tanggal'];
	
} 

$jm = sizeof($data['no_id']);
header("Pragma: public" );
header("Expires: 0" );
header("Cache-Control: must-revalidate, post-check=0, pre-check=0" );
header("Content-Type: application/force-download" );
header("Content-Type: application/octet-stream" );
header("Content-Type: application/download" );;
header("Content-Disposition: attachment;filename=Laporan.xls " );
header("Content-Transfer-Encoding: binary " );
xlsBOF();
xlsWriteLabel(0,3,"no_id" );
xlsWriteLabel(2,0,"perihal" );
xlsWriteLabel(2,1,"pengirim" );
xlsWriteLabel(2,2,"nominal" );
xlsWriteLabel(2,3,"tanggal" );
$xlsRow = 3;

for ($y=0; $y<$jm; $y++) {
	++$i;
	xlsWriteNumber($xlsRow,0,"$i" );
	xlsWriteLabel($xlsRow,1,$data['no_id'][$y]);
	xlsWriteLabel($xlsRow,2,$data['perihal'][$y]);
	xlsWriteLabel($xlsRow,3,$data['pengirim'][$y]);
	xlsWriteLabel($xlsRow,4,$data['nominal'][$y]);
	xlsWriteLabel($xlsRow,5,$data['tanggal'][$y]);
	$xlsRow++;
}
xlsEOF();
exit();