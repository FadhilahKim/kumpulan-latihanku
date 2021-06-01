<?php 
 
if(isset($_POST['simpan'])){ 
 
 
	include('koneksi.php'); 
 
  
 $id   = $_POST['id']; 
 $judul  = $_POST['judul']; 
 $jenis  = $_POST['jenis']; 
 $penulis  = $_POST['penulis']; 
 $harga = $_POST['harga']; 
 
  
 $update = mysqli_query($conn, "UPDATE siswa SET judul='$judul', jenis='$jenis', penulis='$penulis', harga='$harga' WHERE id_penulis='$id'") or die(mysqli_error($conn)); 
 
 
 if($update){ 
 
 	echo "<script>alert('Data berhasil disimpan!');window.location='daftar.php'</script>";
  
 }else{ 
 	echo "<script>alert('Gagal menyimpan data!');window.location='daftar.php'</script>";
  

  } 
 
}else{ 
 
 
	echo '<script>window.history.back()</script>'; 
 
}
?> 