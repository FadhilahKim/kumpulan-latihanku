<?php 
$koneksi = mysqli_connect('localhost','root','','akademik');
//brs ini melakukan pengecekan koneksi ke database
if (mysqli_connect_errno()) {
	echo "Koneksi ke DB gatot:".mysqli_connect_error();
}
 ?>