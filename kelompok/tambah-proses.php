<?php

if (isset($_POST['tambah'])) {

    include('koneksi.php');

    $username  = $_POST['username'];
    $nama  = $_POST['nama'];
    $email  = $_POST['email'];
    $telp = $_POST['telp'];
    $kategori = $_POST['kategori'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];
    $waktu = $_POST['waktu'];
    $nama = $_FILES['gambar']['name'];


    $input = mysqli_query($koneksi, "INSERT INTO pesanan VALUES(NULL,'$username' '$nama', '$email', '$telp', '$kategori', '$gambar', '$deskripsi', '$waktu')") or die(mysqli_error($koneksi));

    if ($_POST['tambah']) {
        $ekstensi_diperbolehkan    = array('png', 'jpg', 'jpeg');
        $x = explode('.', $nama);
        $x = strtolower(end($x));
        $ukuran    = $_FILES['gambar']['size'];
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $namabaru = uniqid();
        $namabaru .= '.';
        $namabaru .= $x;

        move_uploaded_file($file_tmp, 'file/' . $nama);
    }
}
