<?php
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 if(($username=="rusmianti") && ($password=="1212")){
 echo "<script>alert('selamat datang')</script>";
 header("location:tampil.php");
 }
 else{
echo "<script>alert('maaf anda gagal login');location='beranda.php';</script>";
 }
 ?>