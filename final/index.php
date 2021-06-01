<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<form action="select.php" method="post">
		<label>Username</label>
		<input type="text" name="username"> <br>
		<br>
		<label>Password</label>
		<input type="password" name="password"> <br>
		<br>
		<label>Type</label>
		<select name="name_select">
			<option value="admin">Admin</option>
			<option value="member">Member</option>
			<option value="visitor">Visitor</option>
		</select> <br>
		<br>
		<input type="submit" value="Login">

	</form>
</body>
</html>