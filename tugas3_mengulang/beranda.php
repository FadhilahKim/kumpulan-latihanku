<!DOCTYPE html>
<html>
<head>
	<title>My Beranda</title>
</head>
<body>
<?php 
$my_id = 'fadhilah99'; 
$keyword = 9999;

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $my_id and $password == $keyword) {
	header('location:input.php');
}
else{
	header('location:index.php');
}

?>
</body>
</html>