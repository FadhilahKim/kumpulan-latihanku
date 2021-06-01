<?php 

if(isset($_POST['tambah'])){ 
 
	include('koneksi.php'); 

 $nama  = $_POST['nama'];
 $email  = $_POST['email']; 
 $telp = $_POST['telp']; 
 $kategori = $_POST['kategori']; 
 $gambar = $_POST['gambar']; 
 $deskripsi = $_POST['deskripsi']; 
 $waktu = $_POST['waktu']; 


 $input = mysqli_query($koneksi, "INSERT INTO pesanan VALUES(NULL, '$nama', '$email', '$telp', '$kategori', '$gambar', '$deskripsi', '$waktu')") or die(mysqli_error($koneksi)); 
 
  echo 'Data berhasil di tambahkan! ';    
  echo '<a href="index.php">Kembali</a>'; 
 }else{ 
 
  echo 'Gagal menambahkan data! ';  
  echo '<a href="index.php">Kembali</a>'; 
 }  ?> 