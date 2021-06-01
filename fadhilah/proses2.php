<?php 
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$tugas = $_POST['tugas'];
$mid = $_POST['mid'];
$uas = $_POST['uas'];

$nilai = ($tugas+$mid+$uas)/3;

if ($nilai >= 80 && $nilai <= 100 ) {
	$nilai = 'A';
}
elseif ($nilai >= 70 && $nilai <= 79) {
	$nilai = 'B';
}
elseif ($nilai >= 60 && $nilai <= 69) {
	$nilai = 'C';
}
elseif ($nilai >= 50 && $nilai <= 59) {
	$nilai = 'D';
}
elseif ($nilai >= 0 && $nilai <= 49) {
	$nilai = 'E';
}

	echo "mahasiswa atas nama".$nama. "<br>";
	echo "dengan nim".$nim. "<br>";
	echo "maka akan mendapatkan nilai".$nilai. "<br>";
 ?>