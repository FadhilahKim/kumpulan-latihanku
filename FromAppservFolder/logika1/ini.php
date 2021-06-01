<?php
$nama =$_POST['nama'];

$nilai =$_POST['nilai'];

//menghitung nilai dari yang kita tadi input
$nilai_akhir =$nilai *1;
//penjumlahan dari nilai-nilai yang sudah diinput
//menampilkan grade berdasrkan hasil akhir
if($nilai_akhir>=80)
{
	$grade = "A";

}
elseif ($nilai_akhir>=70){
	$grade ="B";
}
elseif ($nilai_akhir>=60){
	$grade ="C";
}
elseif ($nilai_akhir>=50){
	$grade ="D";
}
else {
	$grade ="E";
}
echo "<h4>Grade :$grade</h4>";
?>
