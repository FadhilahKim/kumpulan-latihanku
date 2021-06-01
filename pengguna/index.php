<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
<?php 
	include'koneksi.php';
	$data = mysqli_query($koneksi, "select * from pengguna order by id");
	if ($data === false) {
		die(mysqli_error());
	}
	$no = 1;
	while ($hasil = mysqli_fetch_array($data)) {
		echo "<tr>
		<td>$no</td>
		<td>$hasil[nama]</td>
		<td>$hasil[alamat]</td>
		<td>$hasil[pekerjaan]</td>
		</tr>";
		$no++;
	}
 ?>
	</table>
</body>
</html>