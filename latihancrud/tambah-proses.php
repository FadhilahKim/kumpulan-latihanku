<?php 
 

if(isset($_POST['tambah'])){ 
 
  
	include('koneksi.php'); 
 
  
 $judul  = $_POST['judul'];  
 $jenis  = $_POST['jenis'];  
 $penulis  = $_POST['penulis']; 
 $harga = $_POST['harga']; 
 $input = mysqli_query($conn, "INSERT INTO siswa VALUES(NULL, '$judul', '$jenis', '$penulis', '$harga')") or die(mysqli_error($conn)); 
 
 
 if($input){ 

 	echo "<script>alert('Data berhasil ditambahkan!');window.location='daftar.php'</script>";
  
 	
 }else{ 
 
 	echo "<script>alert('Gagal menambahkan data!');window.location='daftar.php'</script>";
  
 
 } 
 
}else{ 
  
	echo '<script>window.history.back()</script>'; 
 
} ?> 