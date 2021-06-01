<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>hal admin</h2>
	<br>
	<!--cek apakah sdh login-->
	<?php 
		session_start();
		if ($_SESSION['status']!="login") {
			header("location:../index.php?pesan=belum_login");
		}
	 ?>

	 <h2>welcome, <?php echo $_SESSION['nama']; ?>! anda tlh tlh login.</h2><br><br>

	 <a href="logout.php">logout</a>
</body>
</html>