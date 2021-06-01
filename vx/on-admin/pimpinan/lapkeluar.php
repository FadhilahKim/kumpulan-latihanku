<script>
	function lihatlaporankeluar(){
		document.location='?p=laporankeluar&tgl1=' + document.getElementById('dari').value + '&tgl2=' + document.getElementById("sampai").value ;
	}
</script>
<html>
	<head>
		<title>Laporan Barang Keluar</title>
	</head>
	<body>
	<br>
	<center><i><h2>Laporan Barang Keluar</h2></i></center>
	<center><i><h4>TOKOPI</h4></i></center>
	<div class="container">
		<div class="row">
	<div class="col-md-12">
		
		<p>Periode :</p>
			<input type="date" id="dari" required class="form-control" value="<?php if(isset($_GET['tgl1'])){echo $_GET['tgl1'];}?>">
			<br>
			<input type="date" id="sampai" required class="form-control" value="<?php if (isset($_GET['tgl2'])){echo $_GET['tgl2'];}?>">
			<br>
			<button onclick="lihatlaporankeluar()" class="btn btn-primary">Lihat</button>
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
					<th>Tanggal Keluar</th>
					<th>Nama Barang</th>
					<th>Nama Pelanggan</th>
					<th>Satuan</th>
					<th>Jumlah Keluar</th>
					<th>Harga Jual</th>
					<th>Subtotal</th>
				</tr>
			</thead>
			<tbody class="barang">
			<?php
				$i=1;
				//mysqli_query untuk menjalankan command sql (query)
				$sql=mysqli_query($con,"select * from tb_barang as a inner join tb_barangkeluar as b on a.id_barang=b.id_barang inner join tb_pelanggan as c on c.id_pelanggan=b.id_pelanggan where tgl_keluar >='".$_GET['tgl1']."' and tgl_keluar <='".$_GET['tgl2']."'");
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