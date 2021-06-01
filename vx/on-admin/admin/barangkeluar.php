<?php
	if (isset($_GET['ubah'])){
		$datakeluar = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM tb_barangkeluar where id_barangkeluar = '".$_GET['ubah']."'"));
	}
	if (isset($_GET['hapus'])){
		$tambah=mysqli_query($con,"UPDATE tb_barang set stok=(stok+'".$_GET['jml']."') where id_barang='".$_GET['brg']."'");
		$hapus=mysqli_query($con, "DELETE FROM tb_barangkeluar where id_barangkeluar='".$_GET['hapus']."'");
		if($hapus && $tambah){
			echo"
				<script>alert('Data Berhasil di hapus');document.location='?p=keluar'</script>
			";
		}
	}
	if (isset($_POST['simpan'])) {
		if(isset($_GET['ubah'])) {
			$idbrg = $_POST['id_barang'];
			$stok = mysqli_query($con, "select * from tb_barang where id_barang = '".$_GET['brg']."' ");
			$dt = mysqli_fetch_array($stok);
			$editdata=mysqli_fetch_array(mysqli_query($con, "select * from tb_barangkeluar where id_barangkeluar = '".$_GET['ubah']."'"));
			$jm_keluar = $_POST['jumlah_keluar'] - $_GET['jml'];


			if($jm_keluar > $dt['stok']) {
				echo "<script>alert('Stok Tidak Mencukupi');document.location='?p=keluar'</script> ";
			}else{
				$kurang = mysqli_query($con, "update tb_barang set stok = (stok+ '".$_GET['jml']."') where id_barang = '".$_GET['brg']."'");
				$tambah = mysqli_query($con, "update tb_barang set stok = (stok- '".$_POST['jumlah_keluar']."') where id_barang = '".$_GET['brg']."'");
				$ubah = mysqli_query($con, "update tb_barangkeluar set id_barang ='".$_POST['id_barang']."', id_pelanggan ='".$_POST['id_pelanggan']."', tgl_keluar ='".$_POST['tgl_keluar']."', jumlah_keluar ='".$_POST['jumlah_keluar']."', harga_jual ='".$_POST['harga_jual']."', subtotal ='".$_POST['subtotal']."' where id_barangkeluar ='".$_GET['ubah']."'");
				if ($ubah && $kurang && $tambah ) {
				echo"
					<script>alert('Data Berhasil Disimpan');document.location='?p=keluar'</script> 
					";
				}
			}
			
	}
	$stok = mysqli_fetch_array(mysqli_query($con, "select * from tb_barang where id_barang = '".$_POST['id_barang']."'"));

	if($_POST['jumlah_keluar'] > $stok['stok']) {
		echo"
			<script>alert('Stok Tidak Mencukupi');document.location='?p=keluar'</script> 
					";	
	}
	else{

		$simpan=mysqli_query($con,"insert into tb_barangkeluar values(null,'".$_POST['id_barang']."','".$_POST['id_pelanggan']."','".$_POST['tgl_keluar']."','".$_POST['jumlah_keluar']."','".$_POST['harga_jual']."','".$_POST['subtotal']."')");

		$jumlah=mysqli_query($con,"update tb_barang set stok=stok-'$_POST[jumlah_keluar]' where id_barang='$_POST[id_barang]'");

		if ($simpan && $jumlah) {
				echo"
					<script>alert('Data berhasil disimpan');document.location='?p=keluar'</script> 
					";
		}
	}
}
?>
<html>
	<head>
		<title>Tabel Barang Keluar</title>
	</head>
	<br>
	<center><i><h2>Barang Keluar</h2></i></center>
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
							<option <?php echo"value='$data[id_barang]'";?><?php if(isset($_GET['ubah'])){if($datakeluar['id_barang'] == $data['id_barang']){echo "selected=selected";}}?>><?php echo $data['id_barang']." - ".$data['nama_barang']?></option>
							<?php } ?>
					</select>
				</td> <!-- required itu gunanya untuk memberi tahu jika harus diisi --> 
			</tr>
			<tr>
				<td>Id Pelanggan</td>
				<td>:</td>
				<td>
					<select name="id_pelanggan" class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datakeluar['id_pelanggan'];}?>">
						<option selected disabled>--Pilih--</option>
						<?php
							$sql=mysqli_query($con, "select * from tb_pelanggan");
							while($data=mysqli_fetch_array($sql)){
						?>
							<option <?php echo"value='$data[id_pelanggan]'";?><?php if(isset($_GET['ubah'])){if($datakeluar['id_pelanggan'] == $data['id_pelanggan']){echo "selected=selected";}}?>><?php echo $data['id_pelanggan']." - ".$data['nama_pelanggan']?></option>
							<?php } ?>
					</select>
				</td> <!-- required itu gunanya untuk memberi tahu jika harus diisi --> 
			</tr>
			<tr>
				<td>Tanggal Keluar</td>
				<td>:</td>
				<td><input type="date" name="tgl_keluar" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datakeluar['tgl_keluar'];}?>"></td>
			</tr>
			<tr>
				<td>Jumlah Keluar</td>
				<td>:</td>
				<td><input type="number" onkeypress="tambah()" onkeyup="tambah()" name="jumlah_keluar" placeholder="Masukkan Jumlah" id="jumlah_keluar" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datakeluar['jumlah_keluar'];}?>"></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td><input type="number" onkeypress="tambah()" onkeyup="tambah()" name="harga_jual" placeholder="Masukkan Harga Jual" id="harga_jual" required class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datakeluar['harga_jual'];}?>"></td>
			</tr>
			<tr>
				<td>Subtotal</td>
				<td>:</td>
				<td><input type="number" name="subtotal" id="subtotal" placeholder="Subtotal" readonly class="form-control" value="<?php if(isset($_GET['ubah'])){echo $datakeluar['subtotal'];}?>"></td>
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
					<th>Tanggal Keluar</th>
					<th>Nama Barang</th>
					<th>Nama Pelanggan</th>
					<th>Satuan</th>
					<th>Jumlah Keluar</th>
					<th>Harga Jual</th>
					<th>Subtotal</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody class="barang">
			<?php
				$i=1;
				//mysqli_query untuk menjalankan command sql (query)
				$sql=mysqli_query($con,"select * from tb_barang as a inner join tb_barangkeluar as b on a.id_barang=b.id_barang inner join tb_pelanggan as c on c.id_pelanggan=b.id_pelanggan");
				//mysqli_fetch_array untuk menampung data dari command atau perintah dari mysqli_query
				while($data=mysqli_fetch_array($sql)){
			?>
				<tr>
					<td><?php echo $i++;?></td>
					<td><?php echo $data['tgl_keluar'];?></td>
					<td><?php echo $data['nama_barang'];?></td>
					<td><?php echo $data['nama_pelanggan'];?></td>
					<td><?php echo $data['satuan'];?></td>
					<td><?php echo $data['jumlah_keluar'];?></td>
					<td><?php echo "Rp. ".number_format($data['harga_jual'])."";?></td>
					<td><?php echo "Rp. ".number_format($data['subtotal'])."";?></td>
					<td><a href='?p=keluar&ubah=<?php echo $data['id_barangkeluar'];?>&brg=<?php echo $data['id_barang'];?>&jml=<?php echo $data['jumlah_keluar'];?>'>Edit |</a>
						<a href='?p=keluar&hapus=<?php echo $data['id_barangkeluar'];?>&brg=<?php echo $data['id_barang'];?>&jml=<?php echo $data['jumlah_keluar'];?>'>Delete</a>
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
		var a=document.getElementById("jumlah_keluar").value;
		var b=document.getElementById("harga_jual").value;
		var c=a*b;
		if (!isNaN(c)) {
			document.getElementById('subtotal').value = c;
		}
	}
</script>