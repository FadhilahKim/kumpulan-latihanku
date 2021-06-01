<?php
	if (isset($_GET['ubah'])){
		$datasupp = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_supplier where id_supplier= '".$_GET['ubah']."'"));
	}
	if (isset($_GET['hapus'])){
		$hapus=mysqli_query($con, "DELETE FROM tb_supplier where id_supplier='".$_GET['hapus']."'");
		if($hapus){
			echo"
				<script>alert('Data Berhasil di hapus');document.location='?p=supplier'</script>
			";
		}
	}
	if(isset($_POST['simpan'])){
		if(isset($_GET['ubah'])){
			$ubah=mysqli_query($con, "UPDATE tb_supplier SET nama_supplier='".$_POST['nama_supplier']."', alamat='".$_POST['alamat']."', no_telepon='".$_POST['no_telepon']."' where id_supplier='".$_GET['ubah']."'");
			
		if($ubah){
			//document.location tu gunonyo biar datanyo dk keinput 2 kali
			echo"
				<script>alert('Data Berhasil di Simpan');document.location='?p=supplier'</script>
			";	
		}
		}
		else{
			$simpan=mysqli_query($con,"insert into tb_supplier values(null,'".$_POST['nama_supplier']."',
			'".$_POST['alamat']."','".$_POST['no_telepon']."')");		
		if($simpan){
			//document.location tu gunonyo biar datanyo dk keinput 2 kali
			echo"
				<script>alert('Data Berhasil di Simpan');document.location='?p=supplier'</script>
			";
		}
		}
		
	}
	?>
<html>
	<head>
		<title>Tabel Supplier</title>
	</head>
	<br>
	<center><i><h2>Supplier</h2></i></center>
	<br>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<form method="post">
					<table>
						<tr>
							<td>Nama Supplier</td>
							<td>:</td>
							<td><input type="text" name="nama_supplier" placeholder="Masukkan Nama Supplier" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datasupp['nama_supplier'];}?>"></td>
						</tr>
						<tr>
							<td>Alamat</td>
							<td>:</td>
							<td><input type="text" name="alamat" placeholder="Masukkan Alamat" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datasupp['alamat'];}?>"></td>
						</tr>
						<tr>
							<td>Nomor Telepon</td>
							<td>:</td>
							<td><input type="number" name="no_telepon" placeholder="Masukkan Nomor Telepon" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datasupp['no_telepon'];}?>"></td>
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
								<th>Id Supplier</th>
								<th>Nama Supplier</th>
								<th>Alamat</th>
								<th>Nomor Telepon</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody class="barang">
						<?php
							$i=1;
							//mysqli_query untuk menjalankan command sql (query)
							$sql=mysqli_query($con,"select * from tb_supplier");
							//mysqli_fetch_array untuk menampung data dari command atau perintah dari mysqli_query
							while($data=mysqli_fetch_array($sql)){
						?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $data['nama_supplier'];?></td>
								<td><?php echo $data['alamat'];?></td>
								<td><?php echo $data['no_telepon'];?></td>
								<td><a href='?p=supplier&ubah=<?php echo $data['id_supplier'];?>'>Edit |</a>
								<a href='?p=supplier&hapus=<?php echo $data['id_supplier'];?>'>Delete</a>
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