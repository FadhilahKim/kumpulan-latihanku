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
		<input type="text" name="key" size="30" autofocus placeholder="masukan keywordnya disini sobat..." autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>
	<h4>Daftar Mahasiswa Informatika C</h4>
	 <table border="2" cellspacing="0">
	 	<tr>
	 		<th>nama_barang</th>
	 		<th>jenis_barang</th>
	 		<th>expired</th>
	 		<th>harga</th>
	 		<th>kode</th>
	 		<th>keadaan_barang</th>
	 	</tr>

	 	<?php 
	 	$no = 1;

	 	$query = $_POST['key'];
	 	if ($query != '') {
	 		$pilih = mysqli_query($koneksi, "SELECT * FROM barang WHERE nama_barang LIKE '%".$query."%' OR 
	 		jenis_barang LIKE '%".$query."%' OR 
	 		expired LIKE '%".$query."%' OR 
	 		harga LIKE '%".$query."%' OR 
	 		keadaan_barang LIKE '%".$query."%' ");
	 	}else{
	 		$pilih = mysqli_query($koneksi, "SELECT * FROM barang");
	 	}

	 	if (mysqli_num_rows($pilih)) {
	 	
	 	while ($baris = mysqli_fetch_array($pilih)) {
	 	?>

	 	<tr>
	 		<td><?php echo $baris['nama_barang']; ?></td>
	 		<td><?php echo $baris['jenis_barang']; ?></td>
	 		<td><?php echo $baris['expired']; ?></td>
	 		<td><?php echo $baris['harga']; ?></td>
	 		<td><?php echo $baris['kode']; ?></td>
	 		<td><?php echo $baris['keadaan_barang']; ?></td>
	 	</tr>
	 	<?php }}else{
	 		echo "<tr><td colspan='5'><center>Tidak Ada Data</center></td></tr>";
	 	} ?>	 	 
	 </table>
</body>
</html>