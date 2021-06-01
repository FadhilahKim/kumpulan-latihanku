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
	<h3>Form Pencarian Barang</h3>
	<form action="" method="POST">
		<input type="text" name="key" size="30" autofocus placeholder="masukan keywordnya disini" autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>
	<h4>Daftar Barang</h4>
	 <table border="2" cellspacing="0">
	 	<tr>
	 		<th>Kode Barang</th>
	 		<th>Nama Barang</th>
	 		<th>Jenis Barang</th>
	 		<th>Expired</th>
	 		<th>Kondisi Barang</th>
	 	</tr>

	 	<?php 

	 	$query = $_POST['key'];
	 	if ($query != '') {
	 		$pilih = mysqli_query($koneksi, "SELECT * FROM dt_barang WHERE kode_barang LIKE '%".$query."%' OR 
	 		nama LIKE '%".$query."%' OR jenis LIKE '%".$query."%' OR expired LIKE '%".$query."%' OR kondisi LIKE '%".$query."%' ");
	 	}else{
	 		$pilih = mysqli_query($koneksi, "SELECT * FROM dt_barang");
	 	}

	 	if (mysqli_num_rows($pilih)) {
	 	
	 	while ($baris = mysqli_fetch_array($pilih)) {
	 	?>

	 	<tr>
	 		<td><?php echo $baris['kode_barang']; ?></td>
	 		<td><?php echo $baris['nama']; ?></td>
	 		<td><?php echo $baris['jenis']; ?></td>
	 		<td><?php echo $baris['expired']; ?></td>
	 		<td><?php echo $baris['kondisi']; ?></td>
	 	</tr>
	 	<?php }}else{
	 		echo "<tr><td colspan='5'><center>Tidak Ada Data</center></td></tr>";
	 	} ?>	 	 
	 </table>
</body>
</html>