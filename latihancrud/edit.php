
<!DOCTYPE   html>
<html>
<head>
<title>My Website</title>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="dhilah.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  	body {font-family: "Karma", sans-serif;}
	* {box-sizing: border-box;}

	input[type=text], select, textarea {
	  width: 100%;
	  padding: 12px;
	  border: 1px solid #ccc;
	  border-radius: 4px;
	  box-sizing: border-box;
	  margin-top: 6px;
	  margin-bottom: 16px;
	  resize: vertical;
	}

	input[type=submit] {
	  background-color: #4CAF50;
	  color: white;
	  padding: 12px 20px;
	  border: none;
	  border-radius: 4px;
	  cursor: pointer;
	}

	input[type=submit]:hover {
	  background-color: #45a049;
	}

	.container {
	  border-radius: 5px;
	  background-color: #f2f2f2;
	  padding: 20px;
	}
  </style>
</head>
<body>
	<div class="header">
    <div class="navbar">
      <a href="index.php">Home</a>
      <a href="buku.php">Book</a>
      <a href="#">Writer</a>
      <a href="pesan.php">Order</a>
      <a href="about.php">About</a>
    </div>
  <img src="img/nr.png" align="center">
  <center>
  <h1>NR Book</h1>
  <h3>Read Is So Fun</h3>
  </center>
  </div>
<div class="container">
	<div style="margin-left: 350px; margin-right: 350px; ">
<h2><center>Data Buku</center></h2>


<p><center><a	href="login.php" class="link">Tambah Data</a></center></p>
<center>
<h3>Edit   Data  Buku</h3>
 </center>
<?php

include('koneksi.php');


$id   =  $_GET['id'];



$show  =   mysqli_query($conn, "SELECT   *   FROM   siswa  WHERE  id_penulis='$id'");



if(mysqli_num_rows($show)  ==   0){


echo   '<script>window.history.back()</script>';


}else{



$data   =  mysqli_fetch_assoc($show);	

}
?>


<form  action="edit-proses.php"   method="post">
<input  type="hidden"   name="id"  value="<?php   echo  $id;  ?>">	
<label>Judul Buku</label>
    <input type="text"	name="judul"	value="<?php	echo $data['judul'];  ?>" >

    <label>Jenis</label>
    <select name="jenis" required>       
 		<option value="">Pilih</option>       
 		<option value="Novel"	<?php if($data['jenis']  ==  'Novel'){   echo  'selected';  }   ?>>Novel</option>       
 		<option value="Cerpen"	<?php if($data['jenis']  ==  'Cerpen'){  echo  'selected';   }  ?>>Cerpen</option>       
 		<option value="Pendidikan"	<?php if($data['jenis']  ==  'Pendidikan'){  echo   'selected';   }  ?>>Pendidikan</option>
 		<option value="Komik"	<?php if($data['jenis']  ==  'Komik'){   echo  'selected';  }   ?>>Komik</option>            
 	</select>

    <label>Penulis</label>
    <input type="text"   name="penulis"   size="30"   value="<?php echo   $data['penulis'];   ?>"   >

    <label>Harga</label>
    <input  type="text"   name="harga"   size="30"   value="<?php echo   $data['harga'];   ?>"   >

    <input type="submit" type="submit"	name="simpan" value="Simpan">
</form>
</div>
</div>

<div class="footer">
  <p>copyrightNRBooks 2019</p>
</div>
</body>
</html>
