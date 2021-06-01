<!DOCTYPE html>
<html>
<head>
	<title>nr book</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
	<style type="text/css">
		body {
			background-color: black;
			font-family: "Karma", sans-serif;
		}
		.container {
			width: 1000px;
			height: 550px;
			background-image: url(img/6.jpg) ;
			background-size: cover;
			margin:20px auto;
			color: white;
			padding-top: 30px;
		}
		
		.form {
			background-color: transparent;
			height: 150px;
			width: 280px;
			margin: auto;
			padding-left: 5px;
			padding-bottom: 0px;
			top: 60px;
			position: relative;
  			
		}

		.input-container {
		  display: -ms-flexbox; 
		  display: flex;
		  width: 100%;
		  margin-bottom: 15px;
		}

		.icon {
		  padding: 10px;
		  background: dodgerblue;
		  color: white;
		  min-width: 50px;
		  text-align: center;
		}

		.input-field {
		  width: 100%;
		  padding: 10px;
		  outline: none;
		}

		.input-field:focus {
		  border: 2px solid dodgerblue;
		}

		
		.btn {
		  background-color: dodgerblue;
		  color: white;
		  padding: 15px 20px;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  opacity: 0.9;
		}

		.btn:hover {
		  opacity: 1;
		}

	</style>
</head>
<body>
	<div class="container">
		<h1><center>WELCOME TO NR BOOK</center>
		</h1>
		<form action="proses.php" method="POST" class="form">
			<div class="input-container">
		    <i class="fa fa-user icon"></i>
		    <input class="input-field" type="text" placeholder="Username" name="username">
		  	</div>

  			<div class="input-container">
    		<i class="fa fa-key icon"></i>
    		<input class="input-field" type="password" placeholder="Password" name="password">
  			</div>

  			<button type="submit" class="btn">Login</button>

	</form>
	</div>
</body>
</html>