<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi – PRAKTIKUM DATABASE WEBSITE</title>
</head>
<body>
	<h2>SISTEM INFORMASI AKADEMIK</h2>
	<br>
	<a href="tambah.php">TAMBAH DATA MAHASISWA</a>
	<br>
	<br>
	<table border="2">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NIM</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,'select * from mahasiswa');
		while ($d = mysqli_fetch_array($data)) {
		 	?>
		 	<tr>
		 		<td><?php echo $no++; ?></td>
		 		<td><?php echo $d['nama']; ?></td>
		 		<td><?php echo $d['nim']; ?></td>
		 		<td><?php echo $d['alamat']; ?></td>
		 		<td>
		 			<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
		 		</td>
		 	</tr>
		 	<?php 
		 }
		 ?>
	</table>
</body>
</html>