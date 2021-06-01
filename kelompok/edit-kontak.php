<?php

if (isset($_POST['pesan'])) {

    include('koneksi.php');

    $nama  = $_POST['nama'];
    $telepon = $_POST['telepon'];
    $email  = $_POST['email'];
    $kategori = $_POST['kategori'];
    $pesan = $_POST['pesan'];

    $input = mysqli_query($koneksi, "INSERT INTO kontak VALUES(NULL, '$nama','$telepon', '$email', '$kategori', '$pesan')") or die(mysqli_error($koneksi));
    $message = "Berhasil ";
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

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
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
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
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
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
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
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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

                    <h2>Pemesanan Jasa Desain</h2>

                    <p>
                        <?php
                        include('koneksi.php');
                        $id = $_GET['id'];

                        $show = mysqli_query($koneksi, "SELECT * FROM pesanan WHERE crud_id='$id'");

                        if (mysqli_num_rows($show) == 0) {

                            echo '<script>window.history.back()</script>';
                        } else {

                            $data = mysqli_fetch_assoc($show);
                        }  ?>

                        <form action="edit-proses.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <table cellpadding="3" cellspacing="0">
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><input type="text" name="nama" value="<?php echo $data['crud_nama']; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><input type="text" name="email" size="30" value="<?php
                                                                                            echo $data['crud_emali']; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>:</td>
                                    <td><input type="text" name="telp" size="30" value="<?php
                                                                                        echo $data['crud_telp']; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Kategori</td>
                                    <td>:</td>
                                    <td>
                                        <select name="kategori" required>
                                            <option value="">Pilih Kategori</option>
                                            <option value="Logo" <?php
                                                                    if ($data['crud_kategori'] == 'logo') {
                                                                        echo 'selected';
                                                                    } ?>>Logo</option>
                                            <option value="Spanduk" <?php
                                                                    if ($data['crud_kategori'] == 'spanduk') {
                                                                        echo 'selected';
                                                                    } ?>>Spanduk</option>
                                            <option value="Vektor" <?php
                                                                    if ($data['crud_kategori'] == 'vektor') {
                                                                        echo 'selected';
                                                                    } ?>>Vektor</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gambar</td>
                                    <td>:</td>
                                    <td><input type="text" name="gambar" size="30" value="<?php
                                                                                            echo $data['crud_gambar']; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Deskripsi</td>
                                    <td>:</td>
                                    <td><input type="text" name="deskripsi" size="30" value="<?php
                                                                                                echo $data['crud_deskripsi']; ?>" required></td>
                                </tr>
                                <tr>
                                    <td>Waktu penyelesaian pesanan</td>
                                    <td>:</td>
                                    <td>
                                        <select name="waktu" required>
                                            <option value="">Pilih waktu penyelesaian pesanan</option>
                                            <option value="1 hari" <?php
                                                                    if ($data['crud_waktu'] == '1 hari') {
                                                                        echo 'selected';
                                                                    } ?>>1 hari</option>
                                            <option value="2 hari" <?php
                                                                    if ($data['crud_waktu'] == '2 hari') {
                                                                        echo 'selected';
                                                                    } ?>>2 hari</option>
                                            <option value="3 hari" <?php
                                                                    if ($data['crud_waktu'] == '3 hari') {
                                                                        echo 'selected';
                                                                    } ?>>3 hari</option>

                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td></td>
                                    <td><input type="submit" name="simpan" value="Simpan"></td>
                                </tr>
                            </table>
                        </form>

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

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
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