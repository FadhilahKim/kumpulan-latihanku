<?php
session_start();

// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == "") {
    header("location:index.php?pesan=gagal");
}

?>
<?php

if (isset($_POST['tambah'])) {

    include('koneksi.php');
    $nama  = $_POST['nama'];
    $email  = $_POST['email'];
    $telp = $_POST['telp'];
    $kategori = $_POST['kategori'];
    $deskripsi = $_POST['deskripsi'];
    $waktu = $_POST['waktu'];
    $konfirmasi = $_POST['konfirmasi'];
    $hasil = $_POST['hasil'];
    $namafile = $_FILES['gambar']['name'];
    $ukuran = $_FILES['gambar']['size'];
    $file_tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file($file_tmp, 'assets/images/' . $namafile);

    $pembayaran = $_FILES['pembayaran']['name'];
    $ukuran = $_FILES['pembayaran']['size'];
    $file_tmp = $_FILES['pembayaran']['tmp_name'];

    move_uploaded_file($file_tmp, 'assets/images/' . $pembayaran);

    $input = mysqli_query($koneksi, "INSERT INTO pesanan VALUES(NULL, '$nama', '$email', '$telp', '$kategori', '$namafile', '$deskripsi', '$waktu', '$konfirmasi', '$hasil', '$pembayaran')") or die(mysqli_error($koneksi));
    $message = "Berhasil Order. Harap Tunggu Konfirmasi dari kami. Terimakasih ^_^";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>

<?php

if (isset($_POST['pesan'])) {

    include('koneksi.php');

    $nama  = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email  = $_POST['email'];
    $kategori = $_POST['kategori'];
    $pesan = $_POST['pesan'];

    $input = mysqli_query($koneksi, "INSERT INTO kontak VALUES(NULL, '$nama','$telepon', '$email', '$kategori', '$pesan')") or die(mysqli_error($koneksi));
    $message = "Terimakasih ^_^ atas saran/kritik/masukkannya :) ";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style-home.css">
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <title>De'O</title>
</head>

<body id="behavior1">

    <!--================Header Menu Area =================-->
    <header class="header_area">
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #005555; ">
                <div class="container">
                    <img src="assets/img/DesignLogoDeoPutih.png" alt="" width="50px">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse p-3" style="margin-left: 30% " id="navbarSupportedContent">
                        <ul class="navbar-nav ">
                            <li class="nav-item">
                                <a class="nav-link mr-5 pr-5" style="color: white" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-5 pr-5" style="color: white" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mr-5 pr-5" style="color: white" href="#gallery">Gallery</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link mr-5 pr-5" style="color: white" href="#category">Category</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link  mr-5 pr-5" style="color: white" href="#contact">Contact</a>
                            </li>
                            <li class="nav-item-active" style="background-color:#004444; border-radius: 19px;">
                                <a class="nav-link pl-3 pr-3 btn btn-success btn-lg" href="#" data-toggle="modal" data-target="#newRoleModal6" style="color: white; font-weight: bold;">ORDER</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>

        </div>
    </header>
    <!--================Header Menu Area =================-->
    <div id="home" class="jumbotron" style="background-image: radial-gradient(#52D2D2, #003C3C); height: 1000px;">
        <img style="margin-top: 20%; margin-left: 40%;" src="assets/img/LogoDeoF.png" alt="">
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="offset-5 col-md-1">
                <h1 id="about">About</h1>
            </div>
            <div class="col-md-10">
                <hr color="black">
            </div>
        </div>

        <div class="row">
            <div class=" offset-1 col-md-3">
                <img src="assets/img/LogoDeoF.png" alt="" srcset="">
            </div>
            <div class="col-md-1">
                <div style="width: 0px; height: 200px; border: 1px #000 solid;"></div>
            </div>
            <div class="col-6">
                <h2>Design Online</h2>
                <p>Perusahaan penyedia jasa pembuatan website full dengan desain professional dan mudah dimengerti oleh pengguna.</p>
            </div>
        </div>
        <!-- Slideshow container -->
        <!-- Full-width images with number text -->
        <div class="row mt-5" style="background-image: radial-gradient(#52D2D2, #003C3C);">
            <div class=" offset-4 col-sm-4 mt-5 pb-5">
                <h1 class="text-center mb-5 mt-5" id="gallery" style="color: white;">GALLERY</h1>
                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="assets/img/Gallery1.jpg" style="width:100%;">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="assets/img/Gallery2.jpg" style="width:100%;">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="assets/img/gallery3.jpg" style="width:100%;">
                </div>

                <div class="mySlides">
                    <div class="numbertext"></div>
                    <img src="assets/img/Gallery4.jpg" style="width:100%;">
                </div>

                <!-- Next and previous buttons -->
                <a class="prev mt-5" style="margin-left: -50px;" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next mt-5" style="margin-right: -33px;" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
        <div class="row-4 mt-5 pt-5">
            <div class="col-sm-12 text-center">
                <h2 class="mb-5" id="category">Order Category</h2>
            </div>
        </div>
        <div class="row images mb">
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/LogoDesign.jpg" class="img img-responsive img-thumbnail" width="60">
                    <div class="card-body">
                        <h5 class="card-title text-center">Logo Design</h5>
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal">
                            <i class="fa fa-plus"></i> Cek Harga
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/Logo Deo.jpg" class="img img-responsive img-thumbnail" width="60">
                    <div class="card-body">
                        <h5 class="card-title text-center">Vektor Design</h5>
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal1">
                            <i class="fa fa-plus"></i> Cek Harga
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/Poster.jpg" class="img img-responsive img-thumbnail" width="60">
                    <div class="card-body">
                        <h5 class="card-title text-center">Poster Design</h5>
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal2">
                            <i class="fa fa-plus"></i> Cek Harga
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/StempelDesign.jpg" class="img img-responsive img-thumbnail" width="60">
                    <div class="card-body">
                        <h5 class="card-title text-center">Stamp Design</h5>
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal3">
                            <i class="fa fa-plus"></i> Cek Harga
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/Brosure.jpg" class="img img-responsive img-thumbnail" width="60">
                    <div class="card-body">
                        <h5 class="card-title text-center">Brochure Design</h5>
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal4">
                            <i class="fa fa-plus"></i> Cek Harga
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img src="assets/img/BannerDesign.jpg" class="img img-responsive img-thumbnail" width="60">
                    <div class="card-body">
                        <h5 class="card-title text-center">Banner Design</h5>
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal5">
                            <i class="fa fa-plus"></i> Cek Harga
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5 pt-5 pb-5 pl-5" style="background-image: radial-gradient(#52D2D2, #003C3C);">
            <div class="col-md-5">
                <h2 id="contact" class="text-center pt-3 mb-5" style="color:white;">KONTAK</h2>
                <div class="card" style="width: 18rem;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.558066152256!2d115.2527900147737!3d-8.638353490221544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f8dc19eff4d%3A0x81ed76786e90eb40!2sBalai+Diklat+Industri+Denpasar!5e0!3m2!1sid!2sid!4v1564712570970!5m2!1sid!2sid" width="280" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>"

                    <div class="card-body">
                        <!-- <h5 class="card-title">Location</h5> -->
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        <div class="list-group">

                            <a href="#" class="list-group-item list-group-item-action active">
                                <img src="assets/img/DesignLogoDeoPutih2.png" class="ml-5" width="70px" alt="">
                            </a>
                            <a href="#" class="list-group-item list-group-item-action">nomor telepon dan WA <br> +62 898 4898 966</a>
                            <a href="#" class="list-group-item list-group-item-action">email <br> grapich@deo.com</a>
                            <a href="#" class="list-group-item list-group-item-action">jalan <br> Jl. WR Supratman No.302</a>
                            <a href="#" class="list-group-item list-group-item-action">kecamatan <br> Denpasar Tim.,</a>
                            <a href="#" class="list-group-item list-group-item-action">kota <br> Denpasar</a>
                            <a href="#" class="list-group-item list-group-item-action">provinsi <br> Bali</a>
                            <a href="#" class="list-group-item list-group-item-action">negara <br> Indonesia</a>
                            <!-- <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <form action="" method="post">
                    <div class="form-group">
                        <label class="col-md-12 control-label">Nama</label>
                        <div class="col-md-12">
                            <input type="text" name="nama" class="form-control" placeholder="Nama" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label">Nomor Telepon</label>
                        <div class="col-md">
                            <input type="number" name="telepon" class="form-control" placeholder="Nomor Telepon" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label">Email</label>
                        <div class="col-md">
                            <input type="text" name="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label">Kategori</label>
                        <div class="col-md"><select name="kategori" id="kateg" required>
                                <option value="">Pilih Masukkan</option>
                                <option value="Saran">Saran</option>
                                <option value="Kritik">Kritik</option>
                                <option value="Tanya">Tanya</option>
                            </select>

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label">pesan</label>
                        <div class="col-md">
                            <input type="text" name="pesan" class="form-control" placeholder="pesan" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-12 control-label"></label>
                        <div class="col-md">
                            <button class="btn btn-success btn-lg" name="kontak" type="kontak">
                                <i class="fa fa-save"></i> Kirim
                            </button>
                            <button class="btn btn-info btn-lg" name="reset" type="reset">
                                <i class="fa fa-times"></i> Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="mt-5 pt-5 " style="background-color: #005555;  height: 100%; color: white">

        <div class="container">
            <div class="row">
                <div class="col-lg-4  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Social Media</h6>
                        <ul>
                            <li>Facebook</li>
                            <li>Twitter</li>
                            <li>Instagram</li>
                            <li>Pinterest</li>
                            <li>Whatsapp</li>
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-5   col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Telephone</h6>
                        <ul>
                            <li>+62 898 4898 966</li>
                            <li>+62 891 0234 966</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>E-mail</h6>
                        <ul>
                            <li>grapich@deo.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <h6>
            <p class="text-center">Copyright &copy 2019</p>
        </h6>
    </footer>

    <!-- Modal Harga Logo -->
    <div class="modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleRoleModalLabel">Daftar Harga Desain Logo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="assets/img/Hargalogo.png">
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md">
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal6">
                            <i class="fa fa-plus"></i> Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Harga Vektor  -->
    <div class=" modal fade" id="newRoleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleRoleModalLabel">Daftar Harga Desain Vektor</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="assets/img/HargaVektor.png" alt="">
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md">
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal6">
                            <i class="fa fa-plus"></i> Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Harga Poster -->
    <div class="modal fade" id="newRoleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleRoleModalLabel">Daftar Harga Desain Poster</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="assets/img/HargaPoster.png" alt="">
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md">
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal6">
                            <i class="fa fa-plus"></i> Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Harga Stamp -->
    <div class="modal fade" id="newRoleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleRoleModalLabel">Daftar Harga Desain Stamp</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="assets/img/HargaStempel.png" alt="">
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md">
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal6">
                            <i class="fa fa-plus"></i> Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Harga Brochure -->
    <div class="modal fade" id="newRoleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleRoleModalLabel">Daftar Harga Desain Brosur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="assets/img/HargaBrosur.png" alt="">
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md">
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal6">
                            <i class="fa fa-plus"></i> Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Harga Banner -->
    <div class="modal fade" id="newRoleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleRoleModalLabel">Daftar Harga Desain Banner</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="assets/img/HargaSpanduk.png" alt="">
                <div class="form-group">
                    <label class="col-md-12 control-label"></label>
                    <div class="col-md">
                        <a style="margin-left:60px; background-color: #006666" href="" class="btn btn-success btn-lg" data-toggle="modal" data-target="#newRoleModal6">
                            <i class="fa fa-plus"></i> Order
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Data  -->
    <div class=" modal fade" id="newRoleModal6" tabindex="-1" role="dialog" aria-labelledby="exampleRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleRoleModalLabel">Pemesanan Jasa Desain</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <p><a href="index.php">Beranda</a> / <a href="tambah.php">Tambah Data</a></p>

                <form action="" method="post" enctype="multipart/form-data">
                    <table cellpadding="3" cellspacing="0">
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td><input type="text" name="nama" class="form-control form-control-user" required></td>
                        </tr>
                        <tr>
                            <?php
                            include('koneksi.php');
                            $query = mysqli_query($koneksi, "SELECT * FROM user where email='$_SESSION[email]' ORDER BY email DESC") or die(mysqli_error($koneksi));
                            $data = mysqli_fetch_assoc($query)
                            ?>
                            <?php
                            echo '<td> <input type="email" name="email" size="30" class="form-control form-control-user" readonly hidden value="' . $data['email'] . '"></td>';
                            ?>
                        </tr>
                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td><input type="text" name="telp" size="30" class="form-control form-control-user" required></td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>:</td>
                            <td>
                                <select name="kategori" class="form-control form-control-user" required>
                                    <option value="">Pilih Kategori</option>
                                    <option value="logo">Logo</option>
                                    <option value="spanduk">Spanduk</option>
                                    <option value="vektor">Vektor</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Gambar</td>
                            <td>:</td>
                            <td>
                                <input type="file" name="gambar" id="gambar">
                            </td>
                        </tr>

                        <tr>
                            <td>Waktu</td>
                            <td>:</td>
                            <td>
                                <select name="waktu" class="form-control form-control-user" required>
                                    <option value="">Pilih Waktu</option>
                                    <option value="1 Hari">1 hari</option>
                                    <option value="2 Hari">2 hari</option>
                                    <option value="3 Hari">3 hari</option>

                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td><input type="text" name="deskripsi" size="30" class="form-control form-control-user" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" hidden name="konfirmasi" value="Belum Dikonfirmasi" size="30" class="form-control form-control-user" required></td>
                        </tr>
                        <tr>
                            <td><input type="text" hidden value="belum selesai" name="hasil" size="30" class="form-control form-control-user" required></td>
                        </tr>
                        <tr>
                            <td>Bukti Pembayaran</td>
                            <td>:</td>
                            <td>
                                <input type="file" name="pembayaran" id="pembayaran">
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td></td>
                            <td>
                                <input class="btn btn-success btn-lg" type="submit" name="tambah" value="Tambah">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function() {
            //fungsi dibawah hanya berjalan untuk semua tag <a> yang diawali (^) dengan hash (#)
            $('a[href^="#"]').on('click', function(e) {
                $target = $(this.hash);
                $jarak = 90;
                $('html, body').stop().animate({
                        'scrollTop': $target.offset().top - $jarak
                    },
                    500, //durasi dalam milisekon
                    'swing', //efek transisi (opsi : swing / linear)
                    function() {
                        window.location.hash = target;
                    }
                );
            });
        });
    </script>
    <!-- Optional JavaScript -->
    <!-- Optional JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- <script src="assets/js/theme.js"></script> -->
    <script src="assets/js/home-1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>

</html>