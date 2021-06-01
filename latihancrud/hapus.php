<?php 
 
 

 

if(isset($_GET['id'])){ 
 
  
	include('koneksi.php'); 
 
 
	$id = $_GET['id']; 
 
	$cek = mysqli_query($conn, "SELECT id_penulis FROM siswa WHERE id_penulis='$id'") or die(mysqli_error($conn)); 
 
 
	if(mysqli_num_rows($cek) == 0){ 
 
  
		echo '<script>window.history.back()</script>'; 
 
 }else{ 
  
 	$del = mysqli_query($conn, "DELETE FROM siswa WHERE id_penulis='$id'"); 
 	
 	if($del){ 
      echo "<script>alert('Buku berhasil dihapus!');window.location='daftar.php'</script>";
   
  }else{ 
      echo "<script>alert('Gagal menghapus data!');window.location='daftar.php'</script>";
 
  } 
 
 } 
 
}else{ 
 
 
	echo '<script>window.history.back()</script>'; 
 
} 
?> 