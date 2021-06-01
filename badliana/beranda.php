<!DOCTYPE html>
<html>
<head>
	<title>get</title>
</head>
<body>
<?php 
$nama =$_POST ['nama'];
$sandi =$_POST ['sandi'];
if($nama=="badliana" and $sandi=="1234") { ?>
   <h1>Selamat Datang Badliana</h1>
<?php }
else{ ?>
   <a href="index.php"><h2>Maaf Anda Belum Beruntung</h2></a>
<?php }
 ?>

</body>
</html>