<?php
if (isset($_POST['simpan'])) {
    include('koneksi.php');

    $nama  = $_POST['nama'];
    $email  = $_POST['email'];
    $telp = $_POST['telp'];
    $kategori = $_POST['kategori'];

    $namafile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($file_tmp, 'assets/images/' . $namafile);

    $deskripsi = $_POST['deskripsi'];
    $waktu = $_POST['waktu'];
    $konfirmasi = $_POST['konfirmasi'];
    $hasil = $_POST['hasil'];

    $pembayaran = $_FILES['pembayaran']['name'];
    $ukuran = $_FILES['pembayaran']['size'];
    $file_tmp = $_FILES['pembayaran']['tmp_name'];

    move_uploaded_file($file_tmp, 'assets/images/' . $pembayaran);

    $update = mysqli_query($koneksi, "UPDATE pesanan SET crud_nama='$nama', crud_emali='$email', crud_telp='$telp', crud_kategori='$kategori', crud_gambar='$namafile', crud_deskripsi='$deskripsi', crud_waktu='$waktu', crud_konfirmasi='$konfirmasi', crud_pembayaran='$pembayaran' WHERE crud_id='$_GET[id]'") or die(mysqli_error($koneksi));

    //jika query update sukses  
    if ($update) {
        echo 'Data berhasil di simpan! ';
        header('Location: halaman_user.php');
    } else {
        echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal   
        header('Location: halaman_user.php'); //membuat Link untuk kembali ke halaman edit 

    }
} else { //jika tidak terdeteksi tombol simpan di klik 

    //redirect atau dikembalikan ke halaman edit  
    echo '<script>window.history.back()</script>';
}
