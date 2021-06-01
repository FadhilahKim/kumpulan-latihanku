<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi – PRAKTIKUM DATABASE WEBSITE</title>
</head>
<body>
	<h2>SISTEM INFORMASI AKADEMIK</h2>
	<br>
	<form action="" method="post" name="pencarian" id="pencarian">
		<input type="text" name="search" id="search">
		<input type="submit" name="submit" id="submit" value="cari">		
	</form>
	<br>
	<a href="tambah.php">TAMBAH DATA MAHASISWA</a>
	<br>
	<br>
	<table border="2">
		<tr>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
		</tr>
		<?php 
		if ((isset($_POST['submit'])) AND ($_POST['search'] <> "")) {
			$search = $_POST['search'];
			include 'koneksi.php';
			$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nama LIKE '%$search%'");
			foreach ($data as $d) {
				echo "<tr>
					<td>".$d['nama']."</td>
					<td>".$d['nim']."</td>
					<td>".$d['alamat']."</td>
					</tr>";
			}
		}
		else{
			include 'koneksi.php';
			$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
			foreach ($data as $d) {
				echo "<tr>
					<td>".$d['nama']."</td>
					<td>".$d['nim']."</td>
					<td>".$d['alamat']."</td>
					</tr>";
			}
			echo "</table>'";
		}
	?>
</body>
</html>