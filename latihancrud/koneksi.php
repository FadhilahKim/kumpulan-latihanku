<?php 
	$conn =	mysqli_connect("localhost","root","","latihancrud");
	
	if ($conn) {
	 	echo "";
	 } else {
	 	echo "Tidak Terkoneksi";
	 }
?> 