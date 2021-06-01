<?php
	if (isset($_GET['ubah'])){
		$datapelanggan = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_pelanggan where id_pelanggan = '".$_GET['ubah']."'"));
	}
	if (isset($_GET['hapus'])){
		$hapus=mysqli_query($con, "DELETE FROM tb_pelanggan where id_pelanggan='".$_GET['hapus']."'");
		if($hapus){
			echo"
				<script>alert('Data Berhasil di hapus');document.location='?p=pelanggan'</script>
			";
		}
	}
	if(isset($_POST['simpan'])){
		if(isset($_GET['ubah'])){
			$ubah=mysqli_query($con, "UPDATE tb_pelanggan SET nama_pelanggan='".$_POST['nama_pelanggan']."', alamat='".$_POST['alamat']."', no_telepon='".$_POST['no_telepon']."' where id_pelanggan='".$_GET['ubah']."'");
			
		if($ubah){
			//document.location tu gunonyo biar datanyo dk keinput 2 kali
			echo"
				<script>alert('Data Berhasil di Simpan');document.location='?p=pelanggan'</script>
			";	
		}
		}
		else{
			$simpan=mysqli_query($con,"insert into tb_pelanggan values(null,'".$_POST['nama_pelanggan']."',
			'".$_POST['alamat']."','".$_POST['no_telepon']."')");		
		if($simpan){
			//document.location tu gunonyo biar datanyo dk keinput 2 kali
			echo"
				<script>alert('Data Berhasil di Simpan');document.location='?p=pelanggan'</script>
			";
		}
		}
		
	}
	?>
<html>
	<head>
		<title>Tabel Pelanggan</title>
	</head>
	<br>
	<center><i><h2>Pelanggan</h2></i></center>
	<br>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<form method="post">
					<table>
						<tr>
							<td>Nama Pelanggan</td>
							<td>:</td>
							<td><input type="text" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datapelanggan['nama_pelanggan'];}?>"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" placeholder="Masukkan Alamat" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datapelanggan['alamat'];}?>"></td>
						</tr>
						<tr>
							<td>Nomor Telepon</td>
							<td>:</td>
							<td><input type="number" name="no_telepon" placeholder="Masukkan Nomor Telepon" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datapelanggan['no_telepon'];}?>"></td>
						</tr>
						<tr>
							<td></td>
							<td></td>
							<td>
								<input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
								<input type="reset" name="batal" value="Batal" class="btn btn-danger">
							</td>
						</tr>
					</table>
				</form>
			</div>
			<div class="col-md-8">
					<table class="table table-bordered tabel-striped">
						<thead class="thead-dark">
							<tr>
								<th>Id Pelanggan</th>
								<th>Nama Pelanggan</th>
								<th>Alamat</th>
								<th>Nomor Telepon</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody class="barang">
						<?php
							$i=1;
							//mysqli_query untuk menjalankan command sql (query)
							$sql=mysqli_query($con,"select * from tb_pelanggan");
							//mysqli_fetch_array untuk menampung data dari command atau perintah dari mysqli_query
							while($data=mysqli_fetch_array($sql)){
						?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $data['nama_pelanggan'];?></td>
								<td><?php echo $data['alamat'];?></td>
								<td><?php echo $data['no_telepon'];?></td>
								<td><a href='?p=pelanggan&ubah=<?php echo $data['id_pelanggan'];?>'>Edit |</a>
								<a href='?p=pelanggan&hapus=<?php echo $data['id_pelanggan'];?>'>Delete</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
					</div>
		</div>
	</div>
	</body>
</html>