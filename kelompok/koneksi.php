<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'pcommer');
if ($koneksi) { } else {
	echo 'tidak terkoneksi';
}
