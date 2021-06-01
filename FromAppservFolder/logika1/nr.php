<?php
$nama =$_POST['nama'];

$nilai =$_POST['nilai'];


if($nilai>=80)
{
	$grade = "A";

}
elseif ($nilai>=70){
	$grade ="B";
}
elseif ($nilai>=60){
	$grade ="C";
}
elseif ($nilai>=50){
	$grade ="D";
}
else {
	$grade ="E";
}
echo "<h3>Nilai Anda :$grade</h3>";
?>
