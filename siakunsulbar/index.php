<form action="proses_input_user.php" method="POST">
	<label>Username</label>
	<input type="text" name="username" id="username"><br><br>
	<label>Password</label>
	<input type="password" name="password"><br><br>
	<label>Type</label>
		<select name="name_select">
			<option value="user">User</option>
			<option value="mahasiswa">Mahasiswa</option>
			<option value="dosen">Dosen</option>
		</select> <br>
		<br>
	<input type="submit" value="Submit">
</form>