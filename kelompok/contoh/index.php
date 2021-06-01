<?php
 //koneksi
    $conn = mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'deo');
 ?>

 <!DOCTYPE html>
    <html>
    <head>
        <title>Cara Membuat Validasi Menghindari Duplicate Entry Menggunakan PHP</title>
    </head>
    <body>
        <form action="" method="post">
           <table>
               <tr>
                   <td>email</td>
                   <td><input type="email" name="email" placeholder="email"></td>
               </tr>
               <tr>
                   <td>password</td>
                   <td><input type="password" name="password" placeholder="password"></td>
               </tr>
               <tr>
                    <td><input type="submit" name="simpan" value="simpan"></td>
                </tr>
           </table>
        </form>
    </body>
    </html>

     <?php
//proses
    if(isset($_POST['simpan'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
   
//script validasi data

    $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM login WHERE email='$email'"));
    if ($cek > 0){
    echo "<script>window.alert('nama atau email yang anda masukan sudah ada')
    window.location='index.php'</script>";
    }else {
    mysqli_query($conn,"INSERT INTO cek(id,nama,email, password)
    VALUES ('',$email','$password')");

    echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='index.php'</script>";
    }
    }
    ?>