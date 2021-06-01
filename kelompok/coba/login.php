<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 600px;
 height: 28px;
 padding: 5px;
 margin-bottom: 25px;
 background-color: #FFF8DC;
 margin-top: 5px;
 border: 2px solid #ccc;
 color: black;
 font-size: 16px;
}

button {
   font-size: 16px;
 background: linear-gradient(#a0522d 5%, #fff 100%);
 color: #4E4D4B;
 font-weight: bold;
 cursor: pointer;
 width: 600px;
 padding: 10px 0;
 outline:none;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
}

button:hover {
  opacity: 0.8;
}
</style>

</head>

<body bgcolor="F5DEB3">

  <div class="topnav" id="myTopnav">
  <a href="order.php">Order</a>
  <a href="daftarbuku.php">Daftar Buku</a>
  <a href="website.php" class="active">Beranda</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<h2>Login Form</h2>
<center>
<form action="login-proses.php" method="post">
 
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>
        
    <button type="submit" name="submit">Login</button>
    <label><br>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  </div>
</form>
</center>
</body>
</html>
