<!DOCTYPE html>
<html>
<head>
	<title>Latihan CRUD PHP MySQL BDI Denpasar</title>
</head>
<body>
	<h2>Pemesanan Jasa Desain</h2> 
 
 <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p> 

 
 <table cellpadding="5" cellspacing="0" border="1">   
 	<tr bgcolor="#5f9ea0">    
 		<th>No.</th>
 		<th>Nama</th>    
 		<th>Email</th>    
 		<th>Telepon</th>    
 		<th>Kategori</th>    
 		<th>Gambar</th>    
 		<th>Deskripsi</th>  
 		<th>Waktu</th>  
 		<th>Opsi</th>   
 	</tr>   

 <?php
 include('koneksi.php');
 $query = mysqli_query($koneksi, "SELECT * FROM pesanan ORDER BY crud_nama DESC") or die(mysqli_error($koneksi)); 
 if(mysqli_num_rows($query) == 0){
 	echo '<tr><td colspan="6">Tidak ada data!</td></tr>'; 
 	}else{ 
 		$no = 1; 
 		while($data = mysqli_fetch_assoc($query)){
 			echo '<tr>';      echo '<td>'.$no.'</td>';
 			echo '<td>'.$data['crud_nama'].'</td>';
 			echo '<td>'.$data['crud_emali'].'</td>';
 			echo '<td>'.$data['crud_telp'].'</td>';
 			echo '<td>'.$data['crud_kategori'].'</td>';
 			echo '<td>'.$data['crud_gambar'].'</td>';
 			echo '<td>'.$data['crud_deskripsi'].'</td>';
 			echo '<td>'.$data['crud_waktu'].'</td>';
 			echo '<td><a href="edit.php?id='.$data['crud_id'].'">Edit</a> / <a href="hapus.php?id='.$data['crud_id'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
 			echo '</tr>'; 
 			$no++;
 			} 
 
  }   ?>  </table> </body> </html>