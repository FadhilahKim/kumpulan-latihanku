<?php 
$Nama = $_POST ['Nama'];
$NIM = $_POST ['NIM'];
$Tugas = $_POST ['Tugas'];
$MID = $_POST ['MID'];
$UAS = $_POST ['UAS'];


$NILAI = ($Tugas+$MID+$UAS)/3;

if ($NILAI >= 80 && $NILAI <= 100) {
	$NILAI = 'A';
}
elseif ($NILAI >= 70 && $NILAI <= 79) {
	$NILAI = 'B';
}
elseif ($NILAI >= 60 && $NILAI <= 69) {
	$NILAI = 'C';
}
elseif ($NILAI >= 50 && $NILAI <= 59) {
	$NILAI = 'D';
}
elseif ($NILAI >= 0 && $NILAI <= 49) {
	$NILAI = 'E';
}

echo "siswa :".$Nama."<br>";
echo "nim :".$NIM."<br>";
echo "mendapat nilai:".$NILAI."<br>";
 ?>