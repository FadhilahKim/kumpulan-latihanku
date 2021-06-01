<?php
	session_start();
	include"connection.php";
?>
<html> 
<head>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<meta name="description" content="">
  	<meta name="author" content="Dashboard">
  	<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  	<title>admin</title>
	<link href="./asset/gambar/logo.png" rel="icon">
	<link href="./asset/css/styleku.css" rel="stylesheet">
	<link rel="stylesheet" href="./asset/css/bootstrap-grid.css">
	<link rel="stylesheet" href="./asset/css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="./asset/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="./asset/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="./asset/css/bootstrap.css">
	<link rel="stylesheet" href="./asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="./asset/css/bootstrap.bundle.js">
	<link rel="stylesheet" href="./asset/css/bootstrap.bundle.min.js">
	<link rel="stylesheet" href="./asset/css/bootstrap.js">
	<link rel="stylesheet" href="./asset/css/bootstrap.min.js">
	
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12 kepala">
				<h3>
					VX Production
				</h3>

			</div>
			<div class="col-md-12 menu">
				<a href="?">HOME</a> &nbsp;&nbsp;&nbsp;&nbsp;
		
				
				<?php
					if(isset($_SESSION['user_login'])){
						$username = $_SESSION['user_login'];
				?>
					<a href="?p=barang"> TRANSAKSI </a> &nbsp;&nbsp;&nbsp;&nbsp;
					<a href="?p=pelanggan">PELANGGAN</a> &nbsp;&nbsp;&nbsp;&nbsp;
					<a href="?p=gantipass">GANTI PASSWORD</a> &nbsp;&nbsp;&nbsp;&nbsp;
					<a href="logout.php">LOG OUT</a> &nbsp;&nbsp;&nbsp;&nbsp;
				<?php } ?>
			</div>
			<div class="col-md-12 main">
			<?php
				if(isset($_GET['p'])){
					if ($_GET['p'] == 'barang'){ 
						include "./admin/barang.php";
					}elseif($_GET['p'] == 'tambah'){
						include "./admin/tambah.php";
					}elseif($_GET['p'] == 'supplier'){
						include "./admin/supplier.php";
					}elseif($_GET['p'] == 'login'){
						include "login.php";
					}elseif($_GET['p'] == 'gantipass'){
						include "gantipass.php";
					}elseif($_GET['p'] == 'laporanbrg'){
						include "./pimpinan/lapbrg.php";
					}elseif($_GET['p'] == 'laporanmsk'){
						include "./pimpinan/lapmsk.php";
					}elseif($_GET['p'] == 'pelanggan'){
						include "./admin/pelanggan.php";
					}elseif($_GET['p'] == 'keluar'){
						include "./admin/barangkeluar.php";
					}elseif($_GET['p'] == 'laporankeluar'){
						include "./pimpinan/lapkeluar.php";
					}
				}
				else{
			?>
				<center>
				<img src="1.png">
				<br>
				<br>
				<br>
				<i>
				<h2>
				<?php
				if(isset($_SESSION['ADM'])){
					echo "Selamat Datang Admin";
				}if(isset($_SESSION['PIM'])){
					echo "Selamat Datang Pimpinan";
				}				
				?>
				</h2>
				</i>
				</center>
				<br>
				<?php } ?>
			</div>
			<div class="col-md-12 footer">
				<h6>Copyright &copy; 2019 | wawan</h6>
			</div>
		</div>
	</div>
</body>
</html>