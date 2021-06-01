<?php 

$username ='narti';
$password ='12345';

$username_input =$_POST['username'];
$password_input =$_POST['kata_sandi'];

if ($username_input == $username && $password_input == $password) {
 	header('location:beranda.php');
}
else{
 	header('location:index.php');
}

 		
 
?>