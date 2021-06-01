<?php include 'header.php'; ?>
	<div class="container">
		<form class="form-group" action="proses.php" method="post">
			<label>Nama</label>
			<input type="text" name="nama"> <br>
			<label>NIM</label>
			<input type="text" name="nim"> <br>
			<label>Alamat</label>
			<textarea name="alamat"></textarea> <br>
			<input type="submit" value="simpan">
		</form>
	</div>

	<div>
	<?php 
	include 'koneksi.php';
	$no = 1;
	$data = mysqli_query($koneksi,"select * from mahasiswa");
	echo "<table class='table>
	<thead>
	<tr>
		<th scope='col'>No</th>
		<th scope='col'>Nama</th>
		<th scope='col'>NIM</th>
		<th scope='col'>Alamat</th>
		<th scope='col'>Aksi</th>
	</tr>
	</thead><tbody>";
	$data = mysqli_query($koneksi,"select * from mahasiswa");
	while ($d = mysqli_fetch_array($data)) {
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_mahasiswa']; ?></td>
			<td><?php echo $d['nim_mahasiswa']; ?></td>
			<td><?php echo $d['alamat_mahasiswa']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $d['id_mahasiswa'];
					?>">EDIT</a>
				<a href="hapus.php?id=<?php echo $d['id_mahasiswa']; ?>">HAPUS</a> 
			</td> 
		</tr>
		<?php 
	}
	echo "</tbody><table>";
	 ?>
	 </div>

<?php include 'footer.php'; ?>
