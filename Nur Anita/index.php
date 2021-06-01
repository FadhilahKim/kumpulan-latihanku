<?php 
	error_reporting(0);
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>form pencarian</title>
</head>
<body>
	<h3>Form Pencarian Mahasiswa Informatika C</h3>
	<form action="" method="POST">
		<input type="text" name="key" size="30" autofocus placeholder="kasi masukmi apa yang mau di cari..." autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>
	<h4>Daftar Mahasiswa Informatika C</h4>
	 <table border="2" cellspacing="0">
	 	<tr>
	 		<th>No</th>
	 		<th>NIM</th>
	 		<th>Nama</th>
	 		<th>Jenis kelamin</th>
	 		<th>Alamat</th>
	 	</tr>

	 	<?php 
	 	$no = 1;

	 	$query = $_POST['key'];
	 	if ($query != '') {
	 		$pilih = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE Nim LIKE '%".$query."%' OR 
	 		Nama LIKE '%".$query."%' ");
	 	}else{
	 		$pilih = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
	 	}

	 	if (mysqli_num_rows($pilih)) {
	 	
	 	while ($baris = mysqli_fetch_array($pilih)) {
	 	?>

	 	<tr>
	 		<td><?php echo $no++; ?></td>
	 		<td><?php echo $baris['Nim']; ?></td>
	 		<td><?php echo $baris['Nama']; ?></td>
	 		<td><?php echo $baris['jenis_kelamin']; ?></td>
	 		<td><?php echo $baris['Alamat']; ?></td>
	 	</tr>
	 	<?php }}else{
	 		echo "<tr><td colspan='5'><center>Tidak Ada Data</center></td></tr>";
	 	} ?>	 	 
	 </table>
</body>
</html>