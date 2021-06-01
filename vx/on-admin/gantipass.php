<?php
	if(isset($_POST['ubahpass'])){
		$pass=mysqli_fetch_array(mysqli_query($con,"select * from tb_user where username = '".$username."'"));
		if($_POST['passwordlama'] == $pass ['password']){
			if($_POST['passwordbaru'] == $_POST['konfirpassword']){
				$ubahdata = mysqli_query($con, "update tb_user set password = '".$_POST['passwordbaru']."'where username = '".$username."'");
				if($ubahdata){
					echo"<script>alert('Password Berhasil Diubah');document.location='?p=gantipass'</script>";
				}
			}
			else{
				echo"<script>alert('Password Baru dan Konfirmasi Password Tidak Sama');document.location='?p=gantipass'</script>";
			}
		}
		else{
			echo"<script>alert('Password Lama Salah');document.location='?p=gantipass'</script>";
		}

	}
?>

<!doctype html>
<html lang="en">
  <body>
	<!-- padding-top itu untuk memberi jarak dari atas -->
	<div class="row">
		<div class="col-md-3" align="center">
		</div>
		<div class="col-md-6" align="center">
			<!-- border-radius untuk memberi lekukan pada table -->
			<div class="ganti">
				<br>
				<i><h2>Ubah Password</i></h2><br>
				<form method="post">
					<!-- form-control merupakan kelas untuk input yang memasukan kata kata, btn btn-info class untuk submit, btn btn-danger class untuk reset -->
					<input type="text" name="username" class="form-control" value="<?php echo $username;?>" readonly><br>
					<input type="password" name="passwordlama" placeholder="Password" class="form-control"><br>
					<input type="password" name="passwordbaru" placeholder="Password Baru" class="form-control"><br>
					<input type="password" name="konfirpassword" placeholder="Konfirmasi Password Baru" class="form-control"><br><br>
					<input type="submit" name="ubahpass" value="Ubah Password" class="btn btn-info">
					<input type="reset" onclick="document.location='./gantipass.php'" value="Cancel" class="btn btn-danger"><br><br>
				</form>
			</div>
		</div>
	</div>
  </body>
</html>