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


    $input = mysqli_query($koneksi, "INSERT INTO pesanan VALUES(NULL, '$nama', '$email', '$telp', '$kategori', '$namafile', '$deskripsi', '$waktu', '$konfirmasi', '$hasil')") or die(mysqli_error($koneksi));
    $message = "Berhasil Tambah Data";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>De'o - User</title>

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <img src="assets/img/LogoDeoF.png" style="width:100px;" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">De'O</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Tables -->
            <li class="nav-item active">
                <a class="nav-link" href="halaman_user.php">
                    <i class="fas fa-shopping-cart"></i>
                    <span>Daftar Pesanan</span>
                </a>
                <a class="nav-link" href="profil-user.php">
                    <i class="fas fa-user"></i>
                    <span>Profil</span>
                </a>
                <a class="nav-link" href="edit-profil-user.php">
                    <i class="fas fa-user-edit"></i>
                    <span>Edit Profil</span>
                </a>
                <hr class="sidebar-divider">

                <a class="dropdown-item" href="login.php" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                include('koneksi.php');
                                $query = mysqli_query($koneksi, "SELECT * FROM user where email='$_SESSION[email]' ORDER BY email DESC") or die(mysqli_error($koneksi));
                                $data = mysqli_fetch_assoc($query)
                                ?>
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    echo $data['email'];
                                    ?>
                                </span>
                                <img class="img-profile rounded-circle" src="assets/img/LogoDeoF.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!--<a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Waktu</th>
                                            <th>konfirmasi</th>
                                            <th>hasil</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Telepon</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Waktu</th>
                                            <th>konfirmasi</th>
                                            <th>hasil</th>
                                            <th>Bukti Pembayaran</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        include('koneksi.php');
                                        $query = mysqli_query($koneksi, "SELECT * FROM pesanan where crud_emali='$_SESSION[email]' ORDER BY crud_nama DESC") or die(mysqli_error($koneksi));
                                        if (mysqli_num_rows($query) == 0) {
                                            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
                                        } else {
                                            $no = 1;
                                            while ($data = mysqli_fetch_assoc($query)) {
                                                echo '<tr>';
                                                echo '<td>' . $no . '</td>';
                                                echo '<td>' . $data['crud_nama'] . '</td>';
                                                echo '<td>' . $data['crud_emali'] . '</td>';
                                                echo '<td>' . $data['crud_telp'] . '</td>';
                                                echo '<td>' . $data['crud_kategori'] . '</td>';
                                                echo '<td><img src="assets/images/' . $data['crud_gambar'] . '"class="img img-responsive img-thumbnail" width="60"></td>';
                                                echo '<td>' . $data['crud_deskripsi'] . '</td>';
                                                echo '<td>' . $data['crud_waktu'] . '</td>';
                                                echo '<td>' . $data['crud_konfirmasi'] . '</td>';
                                                echo '<td><a href="assets/images/' . $data['crud_hasil'] . '"class="img img-responsive img-thumbnail" width="60">download</a></td>';
                                                echo '<td><img src="assets/images/' . $data['crud_pembayaran'] . '"class="img img-responsive img-thumbnail" width="60"></td>';
                                                echo '<td><a class="btn btn-warning btn-xs" href="edit-user.php?id=' . $data['crud_id'] . '"><i class="mr-1 fa fa-edit"></i>Edit</a> / <a class="btn btn-danger btn-xs" href="hapus-user.php?id=' . $data['crud_id'] . '" onclick="return confirm(\'Yakin?\')"><i class="mr-1 fa fa-trash"></i>Hapus</a></td>';
                                                echo '</tr>';
                                                $no++;
                                            }
                                        }   ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2019</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">??</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tambah Data  -->
    <div class=" modal fade" id="newRoleModal" tabindex="-1" role="dialog" aria-labelledby="exampleRoleModalLabel" aria-hidden="true">
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
                            <td>Email</td>
                            <td>:</td>
                            <td><input type="text" name="email" size="30" class="form-control form-control-user" required></td>
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
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td><input type="text" name="deskripsi" size="30" class="form-control form-control-user" required></td>
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

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/datatables-demo.js"></script>

</body>

</html>