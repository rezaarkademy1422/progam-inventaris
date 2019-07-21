<?php include 'koneksi.php'; ?>
<div class="back">
	<ul>
		<a href="Karyawan.php"><li><img src="img/back.png">	
	</li></a>
	<a href="home.php"><li><img src="img/home.png"></li></a>
	</ul>
</div>
<h1>Data Karyawan :</h1>
<?php
require_once 'functionall.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tbkaryawan");
 while($data = mysqli_fetch_array($sql)){
 ?>

<div class="bloon">
	<form method="post">
<table border="2" style="border:solid white;">
<tr>
	<td>NIK</td>
	<td>Nama</td>
	<td>Jabatan</td>
	<td>No_ktp</td>
	<td>Tempat</td>
	<td>Tanggal Lahir</td>
	<td>Jenis Kelamin</td>
	<td>Status Nikah</td>
	<td>Alamat</td>
	<td>Nomor HP</td>
	<td>Pend. Terakhir</td>
	<td>Jurusan</td>
	<td>Mulai Kerja</td>
	<td>Selesai Kerja</td>
</tr>
 
  
<tr >
	<td><input type="text" disabled="" name="nik" value="<?php echo $data['nik'];?>" style="width: 80px; height: 20px;"></td>
	<td><input type="text" name="namakaryawan" value="<?php echo $data['namakaryawan'];?>" style="width: 120px;"></td>
	<td><input type="text" name="bagian" value="<?php echo $data['bagian'];?>" style="width: 120px;"></td>
	<td> <input type="text" name="noktp" value="<?php echo $data['noktp'];?>" style="width: 120px;"><br></td>
	<td><input type="text" name="tempatlahir" value="<?php echo $data['tempatlahir'];?>" style="width: 120px;"></td>
	<td><input type="date" name="tgllahir" value="<?php echo $data['tgllahir'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'];?>" style="width: 120px;"></td>
	<td><input type="text" name="statusnikah" value="<?php echo $data['statusnikah'];?>" style="width: 120px;"></td>
	<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" style="width: 120px;"></td>
	<td><input type="text" name="nohp" value="<?php echo $data['nohp'];?>" style="width: 120px;"></td>
	<td><input type="text" name="pendidikanakhir" value="<?php echo $data['pendidikanakhir'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jurusan" value="<?php echo $data['jurusan'];?>" style="width: 120px;"></td>
	<td><input type="date" name="tglmulaikerja" value="<?php echo $data['tglmulaikerjak'];?>" style="width: 120px;"></td>
	<td><input type="date" name="tglkeluar" value="<?php echo $data['tglkeluar'];?>" style="width: 120px;"></td>
	
</tr>
	
	
</table>
 </form>
 </div>


 <?php
}
?>



<style type="text/css">
	body{
		color: white;
		background-image: url('img/batu.jpg');
		font-family: Comic Sans MS; 
		background-size: cover;
		background-attachment: fixed;
	}

table{
	border-radius: 3px;
	background-color: rgba(0,0,0,0.5);
}
.bloon button{
	margin: 7px;
	border:1px solid white;
	border-radius: 5px;
	background-color: transparent;
	color:white;
	cursor: pointer;


}
.bloon input{
	color: white;
	border:none;
	background-color: transparent;
	font-size: 13px;
	font-family: Comic Sans MS;
	margin: 10px;
}
.back :hover {
	transition: 0.5s;
	transform: scale(1.2);
	
}

.back a{
	text-decoration: none;
	color: white;
}


.back ul li{
	background-color:white;
	width: 50px;
	height: 40px;
	border:1px solid;
	border-radius: 3px;
	text-align: center;
	margin:5px;	
	list-style: none;
	float: right;

}
.back ul li :hover {
	transition: 1s;
	transform: translate(100px);
}
img{
	width: 30px;
	height: 30px;
	margin: 5px;
}



</style>

