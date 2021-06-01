<?php
if (isset($_GET['id'])) {
    include('koneksi.php');

    $id = $_GET['id'];

    $cek = mysqli_query($koneksi, "SELECT id_kontak FROM kontak WHERE id_kontak='$id'") or die(mysql_error());

    if (mysqli_num_rows($cek) == 0) {

        echo '<script>window.history.back()</script>';
    } else {

        $del = mysqli_query($koneksi, "DELETE FROM kontak WHERE id_kontak='$id'");

        if ($del) {

            echo 'Data siswa berhasil di hapus! ';
            header('Location: index.php');
        } else {

            echo 'Gagal menghapus data! ';
            header('Location: index.php');
        }
    }
} else {

    echo '<script>window.history.back()</script>';
}
