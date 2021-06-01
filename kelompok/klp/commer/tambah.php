<!DOCTYPE html> 
<html> 
<head>  
	<title>Pemesanan Jasa Desain</title> 
</head> 
<body>  
	<h2>Pemesanan Jasa Desain</h2> 
 
 <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p> 
 
 <form action="tambah-proses.php" method="post">   
 	<table cellpadding="3" cellspacing="0">    
 		<tr>     
 			<td>Nama</td>     
 			<td>:</td>    
 			<td><input type="text" name="nama" required></td>    
 		</tr>    
 		<tr>     
 			<td>Email</td>     
 			<td>:</td>     
 			<td><input type="text" name="email" size="30" required></td>    
 		</tr>    
 		<tr>     
 			<td>Telepon</td>     
 			<td>:</td>     
 			<td><input type="text" name="telp" size="30" required></td>    
 		</tr>    
 		<tr>     
 			<td>Kategori</td>     
 			<td>:</td>     
 			<td>      
 				<select name="kategori" required>       
 					<option value="">Pilih Kategori</option>       
 					<option value="logo">Logo</option>       
 					<option value="spanduk">Spanduk</option>
 					<option value="vektor">Vektor</option>      
 				</select>     
 			</td>    
 		</tr>    
 		<tr>     
 			<td>Gambar</td>     
 			<td>:</td>     
 			<td><input type="text" name="gambar" size="30" required></td>    
 		</tr>   
 		<tr>     
 			<td>Deskripsi</td>     
 			<td>:</td>     
 			<td><input type="text" name="deskripsi" size="30" required></td>    
 		</tr>   
 		<tr>     
 			<td>Waktu</td>     
 			<td>:</td>     
 			<td>      
 				<select name="waktu" required>       
 					<option value="">Pilih Jurusan</option>       
 					<option value="Teknik Komputer dan Jaringan">1 hari</option>   
 					<option value="RPL">2 hari</option>     
 					<option value="Multimedia">3 hari</option>       
 					  
  </select>     
</td>    
</tr>    
<tr>     
	<td>&nbsp;</td>     
	<td></td>     
	<td><input type="submit" name="tambah" value="Tambah"></td>    
</tr>   
</table>  
</form> 
</body> 
</html> 