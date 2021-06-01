<?php
	if (isset($_GET['ubah'])){
		$datamasuk = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_tambahbarang where id_tambahbarang= '".$_GET['ubah']."'"));
	}
	if (isset($_GET['hapus'])){
		$kurang=mysqli_query($con,"UPDATE tb_barang set stok=(stok-'".$_GET['jml']."') where id_barang='".$_GET['brg']."'");
		$hapus=mysqli_query($con, "DELETE FROM tb_tambahbarang where id_tambahbarang='".$_GET['hapus']."'");
		if($kurang && $hapus){
			echo"
				<script>alert('Data Berhasil di hapus');document.location='?p=tambah'</script>
			";
		}
	}
	if(isset($_POST['simpan'])){
		if(isset($_GET['ubah'])){
			$kuranglagi=mysqli_query($con,"UPDATE tb_barang set stok=(stok-'".$_GET['jml']."') where id_barang='".$_GET['brg']."'");
			$tambahlagi=mysqli_query($con,"UPDATE tb_barang set stok=(stok+'".$_POST['jumlah_tambah']."') where id_barang='".$_GET['brg']."'");
			$ubah=mysqli_query($con, "UPDATE tb_tambahbarang SET id_barang='".$_POST['id_barang']."', id_supplier='".$_POST['id_supplier']."', tgl_tambah='".$_POST['tgl_tambah']."', jumlah_tambah='".$_POST['jumlah_tambah']."', harga_beli='".$_POST['harga_beli']."', subtotal='".$_POST['subtotal']."' where id_tambahbarang='".$_GET['ubah']."'");
			
		if($ubah){
			//document.location tu gunonyo biar datanyo dk keinput 2 kali
			echo"
				<script>alert('Data Berhasil di Simpan');document.location='?p=tambah'</script>
			";	
		}
		}
		else {
		$simpan=mysqli_query($con,"insert into tb_tambahbarang values(null,'".$_POST['id_barang']."','".$_POST['id_supplier']."','".$_POST['tgl_tambah']."',
		'".$_POST['jumlah_tambah']."','".$_POST['harga_beli']."','".$_POST['subtotal']."')");
		
		$jumlah=mysqli_query($con,"update tb_barang set stok=stok+'$_POST[jumlah_tambah]' where id_barang='$_POST[id_barang]'");
		
	if($simpan && $jumlah){
		//document.location tu gunonyo biar datanyo dk keinput 2 kali
		echo"
			<script>alert('Data Berhasil di Simpan');document.location='?p=tambah'</script>
		";
		}
		}
	}
?>
<html>
	<head>
		<title>Tabel Barang Masuk</title>
	</head>
	<br>
	<center><i><h2>Barang Masuk</h2></i></center>
	<br>
	<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
		<form method="post">
		<table>
			<tr>
				<td>Id Barang</td>
				<td>:</td>
				<td>
					<select name="id_barang" class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datamasuk['id_barang'];}?>">
						<option selected disabled>--Pilih--</option>
						<?php
							$sql=mysqli_query($con, "select * from tb_barang");
							while($data=mysqli_fetch_array($sql)){
						?>
							<option <?php echo"value='$data[id_barang]'";?><?php if(isset($_GET['ubah'])){if($datamasuk['id_barang'] == $data['id_barang']){echo "selected=selected";}}?>><?php echo $data['id_barang']." - ".$data['nama_barang']?></option>
							<?php } ?>
					</select>
				</td> <!-- required itu gunanya untuk memberi tahu jika harus diisi --> 
			</tr>
			<tr>
				<td>Id Supplier</td>
				<td>:</td>
				<td>
					<select name="id_supplier" class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datamasuk['id_supplier'];}?>">
						<option selected disabled>--Pilih--</option>
						<?php
							$sql=mysqli_query($con, "select * from tb_supplier");
							while($data=mysqli_fetch_array($sql)){
						?>
							<option <?php echo"value='$data[id_supplier]'";?><?php if(isset($_GET['ubah'])){if($datamasuk['id_supplier'] == $data['id_supplier']){echo "selected=selected";}}?>><?php echo $data['id_supplier']." - ".$data['nama_supplier']?></option>
							<?php } ?>
					</select>
				</td> <!-- required itu gunanya untuk memberi tahu jika harus diisi --> 
			</tr>
			<tr>
				<td>Tanggal Tambah</td>
				<td>:</td>
				<td><input type="date" name="tgl_tambah" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datamasuk['tgl_tambah'];}?>"></td>
			</tr>
			<tr>
				<td>Jumlah Tambah</td>
				<td>:</td>
				<td><input type="number" onkeypress="tambah()" onkeyup="tambah()" name="jumlah_tambah" placeholder="Masukkan Jumlah" id="jumlah_tambah" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datamasuk['jumlah_tambah'];}?>"></td>
			</tr>
			<tr>
				<td>Harga Beli</td>
				<td>:</td>
				<td><input type="number" onkeypress="tambah()" onkeyup="tambah()" name="harga_beli" placeholder="Masukkan Harga Beli" id="harga_beli" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datamasuk['harga_beli'];}?>"></td>
			</tr>
			<tr>
				<td>Subtotal</td>
				<td>:</td>
				<td><input type="number" name="subtotal" id="subtotal" placeholder="Subtotal" readonly class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datamasuk['subtotal'];}?>"></td>
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
		<div class="col-md-5">
		<table class="table table-bordered tabel-striped">
			<thead class="thead-dark">
				<tr>
					<th>Nomor</th>
					<th>Tanggal Tambah</th>
					<th>Nama Barang</th>
					<th>Nama Supplier</th>
					<th>Satuan</th>
					<th>Jumlah Tambah</th>
					<th>Harga Beli</th>
					<th>Subtotal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="barang">
			<?php
				$i=1;
				//mysqli_query untuk menjalankan command sql (query)
				$sql=mysqli_query($con,"select * from tb_barang as a inner join tb_tambahbarang as b on a.id_barang=b.id_barang inner join tb_supplier as c on c.id_supplier=b.id_supplier");
				//mysqli_fetch_array untuk menampung data dari command atau perintah dari mysqli_query
				while($data=mysqli_fetch_array($sql)){
			?>
				<tr>
					<td><?php echo $i++;?></td>
					<td><?php echo $data['tgl_tambah'];?></td>
					<td><?php echo $data['nama_barang'];?></td>
					<td><?php echo $data['nama_supplier'];?></td>
					<td><?php echo $data['satuan'];?></td>
					<td><?php echo $data['jumlah_tambah'];?></td>
					<td><?php echo "Rp. ".number_format($data['harga_beli'])."";?></td>
					<td><?php echo "Rp. ".number_format($data['subtotal'])."";?></td>
					<td><a href='?p=tambah&ubah=<?php echo $data['id_tambahbarang'];?>&brg=<?php echo $data['id_barang'];?>&jml=<?php echo $data['jumlah_tambah'];?>'>Edit |</a>
						<a href='?p=tambah&hapus=<?php echo $data['id_tambahbarang'];?>&brg=<?php echo $data['id_barang'];?>&jml=<?php echo $data['jumlah_tambah'];?>'>Delete</a>
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
<script>
	function tambah(){
		var a=document.getElementById("jumlah_tambah").value;
		var b=document.getElementById("harga_beli").value;
		var c=a*b;
		if (!isNaN(c)) {
			document.getElementById('subtotal').value = c;
		}
	}
</script>