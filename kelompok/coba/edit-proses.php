<?php 
if(isset($_POST['simpan'])){ 
	include('koneksi.php'); 
 
 $id   = $_POST['id'];
 $nama  = $_POST['nama']; 
 $email  = $_POST['email'];
 $telp  = $_POST['telp']; 
 $kategori = $_POST['kategori']; 
 $gambar = $_POST['gambar'];
 $deskripsi = $_POST['deskripsi'];
 $waktu = $_POST['waktu'];

 $update = mysqli_query($koneksi, "UPDATE pesanan SET crud_nama='$nama', crud_emali='$email', crud_telp='$telp', crud_kategori='$kategori', crud_gambar='$gambar', crud_deskripsi='$deskripsi', crud_waktu='$waktu' WHERE crud_id='$id'") or die(mysqli_error($koneksi)); 
 
 //jika query update sukses  
 if($update){ 
 
  echo 'Data berhasil di simpan! '; 
  echo '<a href="edit.php?id='.$id.'">Kembali</a>'; 
 }else{ 
 
  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal   
  echo '<a href=".php?id='.$id.'">Kembali</a>'; //membuat Link untuk kembali ke halaman edit 
 
 } 
 
}else{ //jika tidak terdeteksi tombol simpan di klik 
 
 //redirect atau dikembalikan ke halaman edit  
	echo '<script>window.history.back()</script>'; 
 
} ?> 