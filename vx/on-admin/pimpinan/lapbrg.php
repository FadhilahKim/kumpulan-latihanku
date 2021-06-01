<html>
	<head>
		<title>Laporan Barang</title>
	</head>
	<br>
	<body>
	<center><i><h2>Laporan Barang</h2></i></center>
	<center><i><h4>TOKOPI</h4></i></center>
	<br>
	<div class="col-md-12">
					<table class="table table-bordered tabel-striped">
						<thead class="thead-dark">
							<tr>
								<th>Id Barang</th>
								<th>Nama Barang</th>
								<th>Satuan</th>
								<th>Stok</th>
								<th>Harga Jual</th>
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
							</tr>
						<?php } ?>
						</tbody>
					</table>
					<br>
					</div>
					<p align=right>Palembang, <?php echo date('d M Y');?>
				</p>
				<br>
				<br>
				<br>
				<br>
				<p align=right>TOKOPI</p>
					</body>
</html>