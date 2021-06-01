<!DOCTYPE html>
<html>
<head>
	<title>POS</title>
</head>
<body>
<?php 
$nama =$POST ['nama'];
$password =$POST ['password'];
if($nama=="susan" and $password=="1212") { ?>
   <h1>Selamat Datang Susan</h1>
<?php }
else{ ?>
   <a href="index.php"><h2>Coba Lagi</h2></a>
<?php }
 ?>

</body>
</html>