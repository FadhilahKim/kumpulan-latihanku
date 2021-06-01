<?php 
$username_admin = 'admin';
$password_admin = 12345;
$username_member = 'member';
$username_visitor = 'visitor';


$name_select = $_POST['name_select'];
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == $username_admin and $password == $password_admin and $username == $name_select){
	header('location:admin.php');
}
elseif ($username == $username_member and $password == $password_admin and $username == $name_select) {
	header('location:member.php');
}
elseif ($username == $username_visitor and $password == $password_admin and $username == $name_select) {
 	header('location:visitor.php');
 } 
 elseif ($username != $name_select && $password == $password_admin ) {
 	echo "<h1>Anda Bukan $name_select</h1>";
 }
 elseif ($username == $name_select && $password !=$password_admin) {
 	echo "<h1>Password Anda Salah</h1>";
 }
 else {
	echo "<h1>Salah Masukan</h1>";
}
?>