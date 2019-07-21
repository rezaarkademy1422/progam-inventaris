<?php include 'koneksi.php'; ?>
<div class="back">
		<ul>
		<a href="stokbarang.php"><li><img src="img/back.png">	
	</li></a>
	<a href="home.php"><li><img src="img/home.png"></li></a>
	</ul>
</div>



<h1>Data Stok Barang :</h1>

<?php
require_once 'functionall.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tbbarang");
 while($data = mysqli_fetch_array($sql)){
 ?>

<div class="bloon">
 <form method="post">

<table border="2" style="border:solid white;">
<tr>
	<td>Kode Barang</td>
	<td>Nama Barang</td>
	<td>Jenis Barang</td>
	<td>Ukuran Barang</td>
	<td>Satuan Barang</td>
	<td>Stok Awal</td>
</tr>
  
<tr>
	<td><input type="text" name="kodebarang" value="<?php echo $data['kodebarang'];?>" style="width: 80px; height: 20px;"></td>
	<td><input type="text" name="nama" value="<?php echo $data['nama'];?>" style="width: 120px;"></td>
	<td><input type="text" name="jenis" value="<?php echo $data['jenis'];?>" style="width: 120px;"></td>
	<td><input type="text" name="ukuran" value="<?php echo $data['ukuran'];?>" style="width: 120px;"></td>
	<td><input type="text" name="satuan" value="<?php echo $data['satuan'];?>" style="width: 120px;"><br></td>
	<td><input type="text" name="stockawal" value="<?php echo $data['stockawal'];?>" style="width: 120px;"></td>
	
</tr>

<!------ kedua ---->

</table>



</form>
 </div>


 <?php
}
?>



<style type="text/css">
	body{
		background-image:url('img/batu.jpg');
		color: white;
		font-family: Comic Sans MS; 
		background-size: cover;
		background-attachment: fixed;
	}
table{
	background-color: rgba(0,0,0, 0.5);
	width: auto;
}	

.bloon{
	margin: 10px;
	border-radius: 5px;

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
	border:none;
	background-color: transparent;
	color:white;
	font-size: 13px;
	font-family: Comic Sans MS;
	margin: 10px;
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
	position: relative;
	
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
.back :hover{
	transition: 0.5s;
	transform: scale(1.1);
	
}

</style>

