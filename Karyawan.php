<?php 
require_once 'Koneksi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Data Karyawan</title>
 
</head>
<body>
	<div class="back">
		<a href="home.php"><li ><img src="img/home.png" style="width: 50px; height: 35px;"></li></a>
	</div>



	<div class="lol">
 <form method="post" enctype="multipart/form-data">

<div class="tLol">
<h2 style="float: right;"> Data Karyawan</h2>
<img src="img/karyawan4.png" style="width: 70px; height: 70px;">
<hr>
<div class="satu">
 Nomor Id Karyawan :
 <br><input type="text" name="nik" placeholder="Contoh : DMxx.xx.xxx" ><br>
 Nama :
 <br><input type="text" name="namakaryawan" placeholder="..."><br>
 Jabatan :
 <br><input type="text" name="bagian" placeholder="..." ><br>
 Nomor KTP :
 <br><input type="text" name="noktp" placeholder="..." ><br>
 Tempat,Tanggal Lahir :
 <br><input type="text" name="tempatlahir" placeholder="..." style="width: 110px;">,<input type="date" name="tgllahir"><br>
 Jenis Kelamin :
 <br><input type="text" name="jeniskelamin" placeholder="..."><br>
 Status Nikah :
 <br><input type="text" name="statusnikah" placeholder="..."><br>
</div>

 <div class="dua">
 Alamat :
 <br><input type="text" name="alamat" placeholder="..."><br>
 Nomor Handphone:
 <br><input type="text" name="nohp" placeholder="..."><br>
 Pendidikan Terakhir :
 <br><input type="text" name="pendidikanakhir" placeholder="..."><br>
 Jurusan :
 <br><input type="text" name="jurusan" placeholder="..."><br>
 Tanggal Mulai Kerja :
 <br><input type="date" name="tglmulaikerja" placeholder="..."><br>
 Tanggal Keluar Kerja :
 <br><input type="date" name="tglkeluar" placeholder="..."><br>
  
 </div>

<br>
</div>
<br>
<br>
<div class="khusus">
<button type="submit" name="btn-tmbhKR" onclick="berhasil()">Tambah</button>
<button ><a href="outputdataKR.php" style="color: black; text-decoration: none;">Lihat Semua Data Karyawan</a></button>
</div>
<script type="text/javascript">
	function berhasil(){
			var $a = confirm("Data Berhasil Ditambahkan");
		
	
	}
</script>


 </form>
<br>
</div>

</body>
</html>

<div class="search">
<form  method="post">
	
		<input type="text" name="nt" placeholder="Cari no. ID Karyawan disini..">
		<button type="submit" name="cari2" value="cari"  class="btn">Cari</button>
<h3 style="margin: 10px;"><b>Hasil Pencarian :</b></h3>
</form>
</div>




<?php
	require_once 'functionall.php';
  if(isset($_POST['cari2'])) {
		$cari = $_POST['nt'];
		$sqli = mysqli_query($db,"SELECT * FROM tbkaryawan WHERE nik LIKE '%$cari%'");
		while($data = mysqli_fetch_array($sqli)){
?>

<div class="bloon2">

<form method="post">

	<table border="2" style="border:solid white;">
<tr>
	<td>NIK</td>
	<td>Nama</td>
	<td>Jabatan</td>
	<td>No_ktp</td>
	
</tr>
  
<tr>
	<td><input type="text" disabled="" name="nik" value="<?php echo $data['nik'];?>" style="width: 80px; height: 20px;"></td>
	<td><input type="text" name="namakaryawan" value="<?php echo $data['namakaryawan'];?>" style="width: 120px;"></td>
	<td><input type="text" name="bagian" value="<?php echo $data['bagian'];?>" style="width: 120px;"></td>
	<td> <input type="text" name="noktp" value="<?php echo $data['noktp'];?>" style="width: 120px;"><br></td>
	
</tr>

<tr>
	<td>Tempat</td>
	<td>Tanggal Lahir</td>
	<td>Jenis Kelamin</td>
	<td>Status Nikah</td>
	
</tr>
<tr>
	<td><input type="text" name="tempatlahir" value="<?php echo $data['tempatlahir'];?>" style="width: 120px;"></td>
	<td><input type="date" name="tgllahir" value="<?php echo $data['tgllahir'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'];?>" style="width: 120px;"></td>
	<td><input type="text" name="statusnikah" value="<?php echo $data['statusnikah'];?>" style="width: 120px;"></td>
	
</tr>
<tr>
	<td>Alamat</td>
	<td>Nomor HP</td>
	<td>Pend. Terakhir</td>
	<td>Jurusan</td>
</tr>
<tr>
	<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" style="width: 120px;"></td>
	<td><input type="text" name="nohp" value="<?php echo $data['nohp'];?>" style="width: 120px;"></td>
	<td><input type="text" name="pendidikanakhir" value="<?php echo $data['pendidikanakhir'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'];?>" style="width: 120px;"></td>
</tr>

<tr>
	<td>Mulai Kerja</td>
	<td>Selesai Kerja</td>
	
</tr>

<tr>
	<td><input type="date" name="tgl_masuk" value="<?php echo $data['tglmulaikerja'];?>" style="width: 120px;"></td>
	<td><input type="date" name="tgl_keluar" value="<?php echo $data['tglkeluar'];?>" style="width: 120px;"></td>
	<td style="text-align: left; border:transparent;"><button type="submit" name="btn-delKR" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Tersebut ?')">Hapus</button></td>
</tr>

</table>



</form>

<?php }
	
	} ?>

	</div>

  


<!-----Gimana Nch---->


<style type="text/css">
	body{
		background-image:url('img/kayu.jpeg');
		color: white;
		font-family: Times New Roman; 
		background-size: cover;	
		background-attachment: fixed;
	}
	.lol{
		width: 53%;
		height: auto;
		background-color: rgba(0,0,0,0.5);
		font-size: 15px;
		border:1px solid;
		border-radius: 10px;
		position: absolute;
	}
	.lol img{
		margin: 10px;
	}
	.lol input{
		font-size: 15px;
		color:white;
		border:1px solid;
		border-radius: 3px;
		background-color: transparent;
		margin: 10px;
	}
	.khusus button{
		width: 40%;
		height: 50px;
		border-radius: 10px;
		background-color: white;
		font-size: 20px;
		font-family: Times New Roman;
		margin: 10px;
	}


	.satu{
		float: left;
	}
	.dua{
		
	}

	.tLol{
		margin:15px;
	}
::placeholder{
	color:white;
}
.bloon2{
	float: right;
	border-radius: 5px;
	height: 400px;


	}
.bloon2 button{
	width: 60px;
	height: 30px;
	margin: 7px;
	border:1px solid white;
	border-radius: 5px;
	background-color: blue;
	color:white;
	cursor: pointer;


}
.bloon2 input{
	border:none;
	background-color: transparent;
	color:white;
	font-size: 13px;
	font-family: Comic Sans MS;
	margin: 10px;
}


.bloon{
	background-color: rgba(0,0,0, 0.5);
	margin: 10px;
	border-radius: 5px;

	}
.bloon button{
	margin: 7px;
	border:1px solid white;
	border-radius: 5px;
	background-color: black;
	color:white;
	cursor: pointer;


}
.bloon input{
	border:none;
	background-color: transparent;
	color:white;
	font-size: 13px;
	font-family: Comic Sans MS;
	margin: 10px;
}
table{
	background-color: rgba(0,0,0,0.5);
}

.back li{
	list-style: none ;
	text-align: center;
	border: 1px solid ;
	border-radius: 5px;
	width: 50px;
	height: 40px;
	color: black;
	background-color:white;
	float: right;
	transition: 0.5s;
	transform: translate(0px);
	margin: 30px;
	}

.back a{
	text-decoration: none;
	color: white;
}

.search{
	background-color: rgba(0,0,0, 0.5);
	border:1px solid white;
	border-radius: 3px;
	width: 560px;
	height: auto;
	margin-left: 752px;

}
.search input{
	width: 250px;
	height: 30px;
	border:3px solid white;
	background-color: transparent;
	color:white;
	font-size: 20px;
	margin:10px;
	
}
.search button{
	width: 70px;
	height: 32px;
	background-color: white;
	
}
.search ::placeholder{
	color:white;
	font-size: 15px;
}
.tambah{
	background-color: white;
}




</style>










