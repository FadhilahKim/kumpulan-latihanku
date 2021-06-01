<?php 
$t = $_POST['tugas'];
$u = $_POST['uas'];
$m = $_POST['mid'];

$nilai =($t + $u + $m)/3;
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$makul = $_POST['makul'];

if ($nilai >= 80 and $nilai <=100) {
  	$nilai ="A";
 } 
 elseif ($nilai >= 70 and $nilai <=79) {
 	$nilai ="B";
 }
 elseif ($nilai >= 60 and $nilai <=69) {
 	$nilai ="C";
 }
 elseif ($nilai >= 50 and $nilai <=59) {
 	$nilai = "D";
 }
 elseif ($nilai >= 0 and $nilai <=49) {
 	$nilai = "E";
 }
 echo "Mahasiswa atas nama : ". $nama.'<br>';
 echo "dengan NIM : ". $nim.'<br>';
 echo "dengan mata kuliah : ". $makul.'<br>';
 echo "mendapatkan nilai : ". $nilai.'<br>';
 ?>