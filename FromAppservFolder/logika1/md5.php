<?php
//menangkap inputan form
$nama =$_POST['nama'];
//mengubah password Arsa menjadi karakter md5
//yaitu 1f50005954dadf4afc1aa5e88
$password =$_POST['password'];
$md5_password= md5("Arsa");
//jika nama benar rio dan password diisi  Arsa
if(($nama=="Rio") &&  (md5($password) == $md5_password)){
	echo 'Halo <b>Rio</b> Login Anda Berhasil';
}
//jika naama atau password salah maka form inputan tetap ditampilkan
else{
	echo 'maaf anda salah';
}
?>