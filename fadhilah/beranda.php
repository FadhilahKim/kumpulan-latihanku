<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
</head>
<body>
<?php 
$id = 'fadhilah';
$keyword = 123;

$username = $_POST['username'];
$password = $_POST['password'];

if ($username != $id or $password != $keyword) {
	echo "Try Again";
}
else{
	header ('location:proses.php');
}
 ?>

</body>
</html>