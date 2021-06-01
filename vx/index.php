<?php

session_start();
// mengecek user sudah login/ belum
if ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != '' ) {
    $halaman = $_SESSION['user_login'];

    // jika login
    echo"
        <script>
            document.location='on-admin/index.php';
        </script>
    ";
    exit();

} else {
    // jika belum
    header('location:login.php');
    exit();
}