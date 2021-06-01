<?php 
	//mengaktifkan session php
	session_start();

	//hubugnkan ke koneksi
	include 'koneksi.php';

	//menangkap dt dr form
	$nama = $_POST['nama'];
	$sandi = $_POST['sandi'];

	//menyeleksi dt akun dgn username dan password
	$data = mysqli_query($koneksi, "SELECT * FROM d0218033 WHERE nama = '$nama' AND sandi = '$sandi'");

	//menghitung jmlh dt yg ditemukan
	$cek = mysqli_num_rows($data);

	if ($cek > 0) {
		$_SESSION['nama'] = $nama;
		$_SESSION['status'] = "login";
		header('location:adm/index.php');
	}else{
		header('location:index.php?pesan=gagal');
	}

 ?>