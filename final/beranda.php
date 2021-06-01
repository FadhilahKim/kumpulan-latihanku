<?php 
$username_admin = 'admin';
$password_admin = 12345;
$username_member = 'member';
$username_visitor = 'visitor';


$name_select = $_POST['name_select'];
$username = $_POST['username'];
$password = $_POST['password'];
if ($username == $name_select and $password == $password_admin){
	echo " anda adalah $name_select";
}
elseif ($username != $name_select and $password == $password_admin) {
	echo "anda bukan $name_select";
}
elseif ($username == $name_select and $password != $password_admin) {
 	echo "password anda salah";
 } 
 else {
	echo "salah masukan";
}
?>