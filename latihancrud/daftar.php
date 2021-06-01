<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="dhilah.css">
  <link rel="stylesheet" type="text/css" href="daftar.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  
  <div class="header">
    <div class="navbar">
      <a href="index.php">Home</a>
      <a href="buku.php">Book</a>
      <a href="#">Writer</a>
      <a href="pesan.php">Order</a>
      <a href="about.php">About</a>
    </div>
  <img src="img/nr.png" align="center">
  <center>
  <h1>NR Books</h1>
  <h3>Read Is So Fun</h3>
  </center>
  </div>
  <div class="row">

  <div class="artikel">
    <center>
	<h2>Data Buku</h2> 
 	<a href="login.php" class="link">Tambah Data</a></p>
  <br>
  <br>
  <br>
  <div style="margin-left: 150px; margin-right: 150px; "> 
 	<table cellpadding="5" cellspacing="0" border="1">   
 	<tr bgcolor="dodgerblue">    
 		<th>No.</th>
 	    <th>Judul Buku</th>    
 	    <th>Jenis</th>    
 	    <th>Penulis</th>    
 	    <th>Harga</th>    
 	    <th>Opsi</th>  
 	</tr>   
 <?php  
 	include('koneksi.php'); 
 
 $query = mysqli_query($conn, "SELECT * FROM siswa ORDER BY judul DESC") or die(mysqli_error($conn)); 
 
 	if(mysqli_num_rows($query) == 0){ 

 	echo '<tr><td colspan="6">Tidak ada data!</td></tr>'; 
 
  }else{ 
 
     
   $no = 1; 
   while($data = mysqli_fetch_assoc($query)){ 
    
    echo '<tr>';      
    echo '<td>'.$no.'</td>';       
    echo '<td>'.$data['judul'].'</td>';       
    echo '<td>'.$data['jenis'].'</td>';      
    echo '<td>'.$data['penulis'].'</td>';     
    echo '<td>'.$data['harga'].'</td>';       
    echo '<td><a href="edit.php?id='.$data['id_penulis'].'" class="edit">Edit</a> / <a href="hapus.php?id='.$data['id_penulis'].'" onclick="javascript: return confirm(\'Apakah anda yakin?\')" class="hapus">Hapus</a></td>';     
    echo '</tr>'; 
 
    $no++; 
	} 
 
  		}   
 ?>  
</table>
</div>
</center>
</div>

 <div class="side">
    <input type="text" name="search" style="height: 30px; ">
    <input type="submit" value="Search" class="search">
    <div class="href">
     <h2>Kategori</h2> <br> <br>
      <a href="">Novel</a> <br> <br>
      <a href="">Cerpen</a> <br> <br>
      <a href="">Pendidikan</a> <br> <br>
      <a href="">Komik</a>
    </div>
    <h2>Discussion:</h2>
    <div>
    <h4><i>Comment:</i></h4>
    <textarea name="textarea" placeholder="Comment" required></textarea>
    <h4><i>Name:</i></h4>
    <input type="text" name="name" placeholder="Name" required><br>
    <h4><i>Email:</i></h4>
    <input type="email" name="email" placeholder="username@gmail.com" required><br><br>
    <input type="submit" value="Post" class="search">
    </div>
    <h3>Share:</h3>
    <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
  <a href="https://www.twitter.com/" class="fa fa-twitter"></a>
  <a href="https://www.google.com/" class="fa fa-google"></a>
  <a href="https://www.youtube.com/" class="fa fa-youtube"></a>
  <a href="https://www.instagram.com/" class="fa fa-instagram"></a>
  </div>

  </div>


<div class="footer">
  <p>copyrightNRBooks 2019</p>
</div>

</body>
</html>