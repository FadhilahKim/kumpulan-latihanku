<?php 
	$username = 'fadhilah_nur';
	$password = mine;

	$user = $_POST['username'];
	$key = $_POST['password'];

	if ($user == $username && $key == $password) {
		header('location:tambah.php');
	}
	else {
		header('location:index.php');
	}
	
 ?>