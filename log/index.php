<?php 
	error_reporting(0);
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>login form</h2>
	<br>
	<!--cek pesan notifikassi--->
	<?php 
		if (isset($_POST['pesan'])) {
			if ($_POST['pesan'] == "gagal") {
				echo "login gagal! slh dua2";
			}else if ($_POST['pesan'] == "logout") {
				echo "anda berhasil logout";
			}else if ($_POST['pesan'] == "belum_login") {
				echo "login dulu cuy";
			}
		}
	 ?>
	 <br><br>
	<form action="jalan.php" method="POST">
		<table>
			<tr>
				<td><b>Nama</b></td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="isi username"></td>
			</tr>
			<tr>
				<td><b>Password</b></td>
				<td>:</td>
				<td><input type="password" name="sandi" placeholder="isi sandi"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</body>
</html>