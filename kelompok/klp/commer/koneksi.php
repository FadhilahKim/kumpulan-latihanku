<?php
	$koneksi = mysqli_connect('localhost', 'root', '', 'pcommer');
	if ($koneksi) {
		echo 'koneksi berhasil';
	}else{
		echo 'tidak terkoneksi';
	}
	?>