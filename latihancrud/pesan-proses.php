<?php  
 

if(isset($_POST['pesan'])){ 
   
	include('koneksi.php'); 
  
 $nama  = $_POST['nama']; 
 $judul  = $_POST['judul']; 
 $jenis  = $_POST['jenis']; 
 $jumlah  = $_POST['jumlah'];  
 $tlpn = $_POST['tlpn'];
 $email  = $_POST['email']; 
 $input = mysqli_query($conn, "INSERT INTO pesan VALUES(NULL, '$nama', '$judul', '$jenis', '$jumlah', '$tlpn', '$email')") or die(mysqli_error($conn)); 
 
 
 if($input){ 

 	echo "<script>alert('Terima kasih telah memesan pada kami. Selanjutnya kami akan menghubungi Anda ');window.location='pesan.php'</script>";
  
 	
 }else{ 
 
 	echo "<script>alert('Gagal memesan!');window.location='index.php'</script>";
  

 
 } 
 
}else{ 
	
	echo '<script>window.history.back()</script>'; 
 
}  
 ?>