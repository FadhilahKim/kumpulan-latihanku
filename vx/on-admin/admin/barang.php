<?php
	if (isset($_GET['ubah'])){
		$databrg = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_barang where id_barang= '".$_GET['ubah']."'"));
	}
	if (isset($_GET['hapus'])){
		$hapus=mysqli_query($con, "DELETE FROM tb_barang where id_barang='".$_GET['hapus']."'");
		if($hapus){
			echo"
				<script>alert('Data Berhasil di hapus');document.location='?p=barang'</script>
			";
		}
	}
	if(isset($_POST['simpan'])){
		if(isset($_GET['ubah'])){
			$ubah=mysqli_query($con, "UPDATE tb_barang SET nama_barang='".$_POST['nama_barang']."', satuan='".$_POST['satuan']."', stok='".$_POST['stok']."',harga_jual='".$_POST['harga_jual']."' where id_barang='".$_GET['ubah']."'");
			
		if($ubah){
			//document.location tu gunonyo biar datanyo dk keinput 2 kali
			echo"
				<script>alert('Data Berhasil di Simpan');document.location='?p=barang'</script>
			";
		}
		}
		else{
		$simpan=mysqli_query($con,"insert into tb_barang values(null,'".$_POST['nama_barang']."','".$_POST['satuan']."',
		'".$_POST['stok']."','".$_POST['harga_jual']."')");
	if($simpan){
		//document.location tu gunonyo biar datanyo dk keinput 2 kali
		echo"
			<script>alert('Data Berhasil di Simpan');document.location='?p=barang'</script>
		";
		}
		}
	}
?>
<html>
	<head>
		<title>TRANSAKSI</title>
	</head>
	<br>
	<center><i><h2> Transaksi</h2></i></center>
	<br>
	<body>
		<div class="container">
		<div class="row">
			<div class="col-md-4">
				<form method="post">
					<table>
						<tr>
							<td>Nama pelanggan</td>
							<td>:</td>
							<td><input type="text" name="nama_barang" placeholder="Masukkan Nama Pelanggan" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $databrg['nama_barang'];}?>"></td> <!-- required itu gunanya untuk memberi tahu jika harus diisi --> 
						</tr>
						<tr>
							<td>Pilih desain</td>
							<td>:</td>
							<td>
								<select name="satuan" class="form-control" value="<?php if(isset($_GET['ubah'])){echo $databrg['satuan'];}?>">
									<option selected disabled>--Pilih--</option>
									<option <?php if(isset($_GET['ubah'])){if($databrg['satuan'] == "Desain 1"){echo "selected=selected";}}?>>Desain 1</option>
									<option <?php if(isset($_GET['ubah'])){if($databrg['satuan'] == "Desain 2"){echo "selected=selected";}}?>>Desain 2</option>
									<option <?php if(isset($_GET['ubah'])){if($databrg['satuan'] == "Desain 3"){echo "selected=selected";}}?>>Desain 3</option>
									
								</select>
							</td>
						</tr>
						<tr>
							<td>Pilihan paket</td>
							<td>:</td>
							<td><input type="number" name="stok" placeholder="Masukan Pilihan paket" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $databrg['stok'];}?>"></td>
						</tr>
						<tr>
							<td>Paket Pembelian</td>
							<td>:</td>
							<td><input type="number" name="harga_jual" placeholder="Masukkan Harga paket" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $databrg['harga_jual'];}?>"></td>
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
								<th>Id pelanggan</th>
								<th>Nama Pelanggan</th>
								<th> Pilih desain</th>
								<th>Pilih paket</th>
								<th>Paket Pembelian</th>
								<th>Aksi</th>
							</tr>
						</thead>




						<tbody class="barang">
						<?php
							$i=1;
							//mysqli_query untuk menjalankan command sql (query)
							$sql=mysqli_query($con,"select * from tb_barang");
							//mysqli_fetch_array untuk menampung data dari command atau perintah dari mysqli_query
							while($data=mysqli_fetch_array($sql)){
						?>
							<tr>
								<td><?php echo $i++;?></td>
								<td><?php echo $data['nama_barang'];?></td>
								<td><?php echo $data['satuan'];?></td>
								<td><?php echo $data['stok'];?></td>
								<td><?php echo "Rp. ".number_format($data['harga_jual'])."";?></td>
								<td><a href='?p=barang&ubah=<?php echo $data['id_barang'];?>'>Edit |</a>
								<a href='?p=barang&hapus=<?php echo $data['id_barang'];?>'>Delete</a>
								</td>
							</tr>
						<?php } ?>
						</tbody>
					</table>
					<br>
					</div>
					</div>
					</div>
	</body>
</html>