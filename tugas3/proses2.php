<?php 
	$nama = $_POST ['nama'];
	$nim = $_POST ['nim'];
	$tugas = $_POST ['tugas'];
	$mid = $_POST['mid']; 
	$uas = $_POST['uas']; 

	$nilai = ($uas+$mid+$tugas)/3;

	if ($nilai >= 80){
		$nilai = 'A';
	}
	elseif ($nilai >= 70) {
		$nilai = 'B';
	}
	elseif ($nilai >= 60) {
		$nilai = 'C';
	}
	elseif ($nilai >= 50) {
		$nilai = 'D';
	}
	elseif ($nilai >= 0) {
		$nilai = 'E';
	}
	
	

	echo 'mahasiswa atas nama'.$nama. '<br>';
	echo 'dengan nim'.$nim. '<br>';
	echo 'mendapatkan nilai'.$nilai;

 ?>