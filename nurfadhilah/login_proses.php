<?php 
	include 'koneksi.php';

	$username = $_POST ['username'];
	$password = $_POST ['password'];

	$query = mysqli_query($koneksi, "select * from D0218033 where username = '$username' and password = '$password'");

	$cek = mysqli_num_rows($query);
	if ($cek > 0) {
		echo "berhasil login";
	} else{
		echo "belum registrasi";
	}
 ?>