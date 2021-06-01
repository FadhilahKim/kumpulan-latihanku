<?php 
	//mengaktifkan session
	session_start();

	//menghps semua session
	session_destroy();

	//mengalihkan hlmn smbl mengrim psn logout 
	header("location:../index.php?=logout");
 ?>