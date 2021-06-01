<?php 
	$username_daftar = 'admin' ;
	$password_daftar = 123 ;

	$username_input =$_POST['nama'];
	$password_input =$_POST['saya'];

	if ($username_input == $username_daftar && $password_input == $password_daftar)
	{
		header('location:beranda.php');
	}
	else{
		echo "sorry";
	}
 ?>
