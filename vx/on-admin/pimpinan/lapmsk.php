<script>
	function lihatlaporan(){
		document.location='?p=laporanmsk&tgl1=' + document.getElementById('dari').value + '&tgl2=' + document.getElementById("sampai").value ;
	}
</script>
<html>
	<head>
		<title>Laporan
		 Barang Masuk</title>
	</head>
	<body>
	<br>
	<center><i><h2>Laporan Barang Masuk</h2></i></center>
	<center><i><h4>TOKOPI</h4></i></center>
	<div class="container">
		<div class="row">
	<div class="col-md-12">
		
		<p>Periode :</p>
			<input type="date" id="dari" required class="form-control" value="<?php if(isset($_GET['tgl1'])){echo $_GET['tgl1'];}?>">
			<br>
			<input type="date" id="sampai" required class="form-control" value="<?php if (isset($_GET['tgl2'])){echo $_GET['tgl2'];}?>">
			<br>
			<button onclick="lihatlaporan()" class="btn btn-primary">Lihat</button>
			<br>
			<br>
	</div>
	<?php
		if (isset($_GET['tgl1']) && isset($_GET['tgl2'])){

			?>
	<div class="col-md-12">
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
				</tr>
			</thead>
			<tbody class="barang">
			<?php
				$i=1;
				//mysqli_query untuk menjalankan command sql (query)
				$sql=mysqli_query($con,"select * from tb_barang as a inner join tb_tambahbarang as b on a.id_barang=b.id_barang inner join tb_supplier as c on c.id_supplier=b.id_supplier where tgl_tambah >='".$_GET['tgl1']."' and tgl_tambah <='".$_GET['tgl2']."'");
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
					</td>
				</tr>
			<?php } ?>
	
			</tbody>
		</table>
		</div>
			<?php }?>
	</div>
	</div>
		</body>
</html>