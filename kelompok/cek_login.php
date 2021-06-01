<?php
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST["password"];

// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "select * from user where email='$email' ");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if ($data['level'] == "admin" && password_verify($password, $data['password'])) {

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:halaman_admin.php");

		// cek jika user login sebagai pengguna
	} else if ($data['level'] == "user" && password_verify($password, $data['password'])) {
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $email;
		$_SESSION['level'] = "user";
		// alihkan ke halaman dashboard pengguna
		header("location:halaman_user.php");
	} else {

		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}
} else {
	header("location:login.php?pesan=gagal");
}
