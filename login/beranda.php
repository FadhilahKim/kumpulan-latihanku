<!DOCTYPE html>
<html>
<head>
	<title>Berandaku</title>
</head>
<body>
<?php 
$username =$_POST ['username'];
$password =$_POST ['password'];
if($username=="fadhilah99" and $password==9999) { ?>
	<h1><center>Welcome To Your Account Fadhilah99</center></h1>
<?php }
else { ?>
	<a href="index.php"><h2><center>TRY AGAIN</center></h2> </a>
<?php }
 ?>

</body>
</html>