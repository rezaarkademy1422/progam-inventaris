<?php include 'koneksi.php'; ?>
<div class="back">
	<ul>
		<a href="transaksiLPT.php"><li><img src="img/back.png">	
	</li></a>
	<a href="home.php"><li><img src="img/home.png"></li></a>
	</ul>
</div>
<h1>Data Transaksi Laptop :</h1>
<?php
require_once 'functionall.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tbtransaksilaptop");
 while($data = mysqli_fetch_array($sql)){
 ?>

<div class="bloon">
	<form method="post">
<table border="2" style="border:solid white;">
<tr>
	<td>Tanggal Peminjaman</td>
	<td>Kode Barang</td>
	<td>Merk</td>
	<td>Type</td>
	<td>Serial Number</td>
	<td>Status</td>
	<td>Keterangan</td>
	<td>NIK</td>
	<td>Nama</td>
	<td>Jabatan</td>
	<td>Pendididkan Akhir</td>
	<td>Jenis Kelamin</td>
	<td>TTL</td>
	<td>Alamat</td>
	<td>Tahun Masuk</td>
	<td>Nomor Handphone</td>
	<td>Tanggal Pengembalian</td>
</tr>
 
  
<tr >
	<td><input type="date" name="tglpeminjaman" value="<?php echo $data['tglpeminjaman'];?>" style="width: 150px; height: 20px;"></td>
	<td><input type="text" name="kodebarang" value="<?php echo $data['kodebarang'];?>" style="width: 120px;"></td>
	<td><input type="text" name="merk" value="<?php echo $data['merk'];?>" style="width: 120px;"></td>
	<td><input type="text" name="type" value="<?php echo $data['type'];?>" style="width: 120px;"><br></td>
	<td><input type="text" name="sn" value="<?php echo $data['sn'];?>" style="width: 120px;"></td>
	<td><input type="text" name="status" value="<?php echo $data['status'];?>" style="width: 120px;"></td>
	<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>" style="width: 120px;"></td>
	<td><input type="text" name="noid" value="<?php echo $data['noid'];?>" style="width: 120px;"></td>
	<td><input type="text" name="nama" value="<?php echo $data['nama'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jabatan" value="<?php echo $data['jabatan'];?>" style="width: 120px;"></td>
	<td><input type="text" name="pendidikanakhir" value="<?php echo $data['pendidikanakhir'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'];?>" style="width: 120px;"></td>
	<td><input type="text" name="ttl" value="<?php echo $data['ttl'];?>" style="width: 120px;"></td>
	<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" style="width: 120px;"></td>
	<td><input type="text" name="tahunmasuk" value="<?php echo $data['tahunmasuk'];?>" style="width: 120px;"></td>
	<td><input type="text" name="nohp" value="<?php echo $data['nohp'];?>" style="width: 120px;"></td>
	<td><input type="date" name="tglpengembalian" value="<?php echo $data['tglpengembalian'];?>" style="width: 150px;"></td>
	
	
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

