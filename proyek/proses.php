<?php 
	 $nama   = $_POST ['nama'];
	 $nim    = $_POST ['nim'];
	 $alamat = $_POST ['alamat'];

	 include 'koneksi.php';

	 mysqli_query($koneksi,"insert into mahasiswa values('','$nama','$nim','$alamat')");

	 header('location:sukses.php');
?>