<?php

$username =$_POST['username'];

$password =$_POST['password'];

if(($username =="@nurfadhilah99") &&  ($password == 121699)) {
	echo '<br> 
			<br> <center> <h3> Hallo <b>NURFADHILAH</b> Welcome to Your Website </h3> </center> ';
}

else{
	echo '<br> 
			<br> <center> <h3> <b>ERROR!!</b> Please check your connection! </h3> </center>';
}
?>