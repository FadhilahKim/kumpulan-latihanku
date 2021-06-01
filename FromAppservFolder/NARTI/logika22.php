<?php
//menangkap inputan form
$nama =$_POST['nama'];
//mengubah password TEKNIK menjadi karakter md5
//yaitu 1f50005954dadf4afc1aa5e88
$password =$_POST['password'];
$md5_password= md5("TEKNIK");
//jika nama benar narti dan password diisi  TEKNIK
if(($nama=="Narti") &&  (md5($password) == $md5_password)){
	echo 'Halo <b>Narti</b> Login Anda Berhasil';
}
//jika naama atau password salah maka form inputan tetap ditampilkan
else{
	echo 'maaf anda salah';
}
?>