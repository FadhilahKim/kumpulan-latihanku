<!DOCTYPE html>
<html>
	<head>
		<title>Form Pemesanan Desain</title>
	</head>
	<body>
	<h1>Form Pemesanan Desain</h1>
		<?php 
		include 'koneksi.php';
		if($_POST['upload']){
			$ekstensi_diperbolehkan	= array('png','jpg', 'jpeg');
			$nama = $_FILES['file']['nama'];
			$x = explode('.', $nama);
			$ekstensi = strtolower(end($x));
			$ukuran	= $_FILES['file']['size'];
			$file_tmp = $_FILES['file']['tmp_nama'];	


			if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
				if($ukuran < 1044070){			
					$query = mysqli_query($koneksi, "INSERT INTO pesanan VALUES(NULL, '$nama')");
					if($query){
						echo '<br/>FILE BERHASIL DI UPLOAD';
					}else{
						echo '<br/>GAGAL MENGUPLOAD GAMBAR';
					}
				}else{
					echo '<br/>UKURAN FILE TERLALU BESAR';
				}
			}else{
				echo '<br/>EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
			}

			$namabaru = uniqid();
			$namabaru .= '.';
			$namabaru .= $x;

			move_uploaded_file($file_tmp, 'file/'.$nama);

		}
		?>
 
		<br/>
		<br/>
		<a href="index.php">Upload Lagi</a>
		<br/>
		<br/>
 

	</body>
</html>