<!DOCTYPE html>
<html>
<head>
	<title>Pemesanan Jasa Desain</title>
</head>
<body>
	<h2>Pemesanan Jasa Desain</h2> 
 
 <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p> 
 
<?php
	include('koneksi.php');
  $id = $_GET['id']; 
 
	$show = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE crud_id='$id'"); 
 
	if(mysqli_num_rows($show) == 0){ 
 
		echo '<script>window.history.back()</script>'; 
 
 }else{ 
 
  $data = mysqli_fetch_assoc($show); 
 }  ?> 
 
 <form action="edit-proses.php" method="post">   
 	<input type="hidden" name="id" value="<?php echo $id; ?>"> 
 	<table cellpadding="3" cellspacing="0">    
 		<tr>     
 			<td>Nama</td>     
 			<td>:</td>     
 			<td><input type="text" name="nama" value="<?php echo $data['crud_nama']; ?>" required></td> 
   </tr>    
   <tr>     
   	<td>Email</td>     
   	<td>:</td>     
   	<td><input type="text" name="email" size="30" value="<?php 
    echo $data['crud_emali']; ?>" required></td> 
   </tr>    
   <tr>     
    <td>Telepon</td>     
    <td>:</td>     
    <td><input type="text" name="telp" size="30" value="<?php 
    echo $data['crud_telp']; ?>" required></td> 
   </tr>    
   	<tr>     
   		<td>Kategori</td>     
   		<td>:</td>     
   		<td>      
   			<select name="kategori" required>       
   				<option value="">Pilih Kategori</option>       
   				<option value="Logo" <?php 
   				if($data['crud_kategori'] == 'logo'){ echo 'selected'; } ?>>Logo</option> 
   				<option value="Spanduk" <?php 
   				if($data['crud_kategori'] == 'spanduk'){ echo 'selected'; } ?>>Spanduk</option> 
          <option value="Vektor" <?php 
          if($data['crud_kategori'] == 'vektor'){ echo 'selected'; } ?>>Vektor</option> 
   			</select>     
   		</td>    
   	</tr>  
    <tr>     
    <td>Gambar</td>     
    <td>:</td>     
    <td><input type="text" name="gambar" size="30" value="<?php 
    echo $data['crud_gambar']; ?>" required></td> 
    </tr>  
    <tr>     
    <td>Deskripsi</td>     
    <td>:</td>     
    <td><input type="text" name="deskripsi" size="30" value="<?php 
    echo $data['crud_deskripsi']; ?>" required></td>    
   </tr>    
   	<tr>     
   		<td>Waktu penyelesaian pesanan</td>     
   		<td>:</td>     
   		<td>      
   			<select name="waktu" required>       
   				<option value="">Pilih waktu penyelesaian pesanan</option>       
   				<option value="1 hari" <?php 
          if($data['crud_waktu'] == '1 hari'){ echo 'selected'; } ?>>1 hari</option>        
   				<option value="2 hari" <?php 
          if($data['crud_waktu'] == '2 hari'){ echo 'selected'; } ?>>2 hari</option>
          <option value="3 hari" <?php 
          if($data['crud_waktu'] == '3 hari'){ echo 'selected'; } ?>>3 hari</option>
     
          </select>     
        </td>    
      </tr>    
      <tr>     
        <td>&nbsp;</td>     
        <td></td>     
        <td><input type="submit" name="simpan" value="Simpan"></td>    
      </tr>   
    </table>  
  </form> 
</body> 
</html>