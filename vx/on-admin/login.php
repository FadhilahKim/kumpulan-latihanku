<?php
	if(isset($_POST['login'])){
		$login=mysqli_query($con,"select * from tb_user where username='".$_POST['username']."' and password='".$_POST['password']."'");
		$cek=mysqli_fetch_array($login);
			if(mysqli_num_rows($login)>0){
				if($cek['akses']=='Admin'){ 
					$_SESSION['ADM'] = $_POST['username'];
					echo "<meta http-equiv='refresh' content='0;url=./?'>";
				}
				if($cek['akses']=='Pimpinan'){ 
					$_SESSION['PIM'] = $_POST['username'];
					echo "<meta http-equiv='refresh' content='0;url=./?'>";
				}
			}
			else{
				echo"<script>alert('Username/Password Salah');document.location='?p=login'</script>";
			}
			if($login){
		//document.location tu gunonyo biar datanyo dk keinput 2 kali
		echo"
			<script>alert('Login Berhasil !');document.location='?'</script>
		";
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
			<div class="login">
				<br>
				<i><h2>Login Tokopi</i></h2><br>
				<form method="post">
					<!-- form-control merupakan kelas untuk input yang memasukan kata kata, btn btn-info class untuk submit, btn btn-danger class untuk reset -->
					<input type="text" name="username" placeholder="Input Username" class="form-control"><br>
					<input type="password" name="password" placeholder="Input Password" class="form-control"><br><br>
					<input type="submit" name="login" value="Login" class="btn btn-info">
					<input type="reset" onclick="document.location='?'" value="Cancel" class="btn btn-danger"><br><br>
				</form>
			</div>
		</div>
	</div>
  </body>
</html>