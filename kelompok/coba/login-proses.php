<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
 include "koneksi.php";

if(isset($_POST['submit'])){ 
 
$username = $_POST['uname'];
$password = $_POST['psw'];
 
$data = mysqli_query($koneksi,"SELECT * FROM login WHERE email='$username' AND password='$password'");
 
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	$cek['email'] = $username;
	$cek['password'] = $password;
	header("location:index.php");
}else{
	echo 'Gagal menambahkan data! ';
}
}
?>
</body>
</html>
