<?php
$username_daftar='admin';
$password_daftar= 123 ;

$username_input =$_POST ['nama'];
$password_input =$_POST [ 123 ];

if ($username_input == $username_daftar && $password_input == $password_daftar)

{
	echo"WELCOME";
}
else{
	echo"SORRY";

}

?>