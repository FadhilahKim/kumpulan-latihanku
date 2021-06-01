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
	<h3>Cari Webtoon Kesukaanmu Disini Sobat!</h3>
	<form action="" method="POST">
		<input type="text" name="key" size="30" autofocus placeholder="masukan keywordnya disini sobat..." autocomplete="off">
		<button type="submit" name="cari">Cari</button>
	</form>
	<h4>Pilih Mana Suka Sobat :)</h4>
	 <table border="2" cellspacing="0">
	 	<tr>
	 		<th>No.</th>
	 		<th>Judul</th>
	 		<th>Genre</th>
	 		<th>Author</th>
	 		<th>Keterangan</th>
	 	</tr>

	 	<?php 
	 	$no = 1;

	 	$query = $_POST['key'];
	 	if ($query != '') {
	 		$pilih = mysqli_query($koneksi, "SELECT * FROM daftar_webtoon WHERE judul LIKE '%".$query."%' OR 
	 		genre LIKE '%".$query."%' OR author LIKE '%".$query."%' OR keterangan LIKE '%".$query."%' ");
	 	}else{
	 		$pilih = mysqli_query($koneksi, "SELECT * FROM daftar_webtoon");
	 	}

	 	if (mysqli_num_rows($pilih)) {
	 	
	 	while ($baris = mysqli_fetch_array($pilih)) {
	 	?>

	 	<tr>
	 		<td><?php echo $no++; ?></td>
	 		<td><?php echo $baris['judul']; ?></td>
	 		<td><?php echo $baris['genre']; ?></td>
	 		<td><?php echo $baris['author']; ?></td>
	 		<td><?php echo $baris['keterangan']; ?></td>
	 	</tr>
	 	<?php }}else{
	 		echo "<tr><td colspan='5'><center>Tidak Ada Data</center></td></tr>";
	 	} ?>	 	 
	 </table>
</body>
</html>