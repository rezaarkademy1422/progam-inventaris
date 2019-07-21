
<?php 
require_once 'Koneksi.php';
require_once 'functionall.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>
<div class="body"> 
<h1>Daftar - Register Akun</h1>
<hr>


<div class="daftar">
	
	 <form method="post" enctype="multipart/form-data">
 	
	<h3>Nama: </h3>
	<input type="text" name="nama" placeholder="...">
	<h3>Username : </h3>
	<input type="text" name="user" placeholder="...">
	<h3>Password : </h3>
	<input type="password" name="password" placeholder="...">
	<h3>Konfirmasi Password : </h3>
	<input type="password" name="confirmpassword" placeholder="...">
	
	<br>
	<br>
	
	<button type="submit" name="btn-tmbhDFTR" onclick="berhasil()">Daftar Sekarang</button>
	<a href="Login.php"> Kembali</a>


	<script type="text/javascript">
	function berhasil(){
			var $a = confirm("Data Berhasil Ditambahkan");
	}
	</script>


	</form>

</div>


</div>
</body>
</html>


<style type="text/css">
	body{
	background-image :url('img/pemandangan.png');
	color: white;
	font-family: Times New Roman;
	background-repeat: none;
	padding: 5px;
}


::placeholder {
	color: white;
	font-size: 20px;
	margin-left: 3px
}
input{
	width: 300px;
	height: 40px;
	border: none;
	color: white;
	font-size:20px;
	margin: ; 
	background-color: rgba(0,0,0, 0.5);
	border:1px solid;
	border-radius: 5px;
	
	
}
.body{
	border:1px solid white;
	border-radius: 5px;
	padding: 25px;
	width: 25%;
	margin: auto;
	animation-name: gerakan;
	animation-duration: 1s;

}

@keyframes gerakan{

	0%{
		transform: scale(0);
		
	}
	25%{
		transform: scale(0.1);
		
		}
	50%{
		transform: scale(0.1;); 
		
	}
	75%{
		
		
	}
	100%{
		
	}
}


button{
	width: 140px;
	height: 35px;
	
}
a{
	color: white;
	float: right;
}

</style>	