<?php 
require_once 'Koneksi.php';

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Data Handphone</title>
 
</head>
<body>
	<div class="back">
		<a href="home.php"><li ><img src="img/home.png" style="width: 50px; height: 35px;"></li></a>
	</div>

	<div class="lol">
 <form method="post" enctype="multipart/form-data">

<div class="tLol">
<h2 style="float: right;"> Data Handphone</h2>
<img src="img/handphone2.png" style="width: 70px; height: 70px;">
<hr>
<div class="satu">
 Kode Barang :
 <br><input type="text" name="kodebarang" placeholder="..." ><br>
 Merk :
 <br><input type="text" name="merk" placeholder="..."><br>
 Tipe :
 <br><input type="text" name="type" placeholder="..." ><br>
 Serial Number :
 <br><input type="text" name="sn" placeholder="..." ><br>
  IMEI 1:
 <br><input type="text" name="imei1" placeholder="..." ><br>
 IMEI 2 :
 <br><input type="text" name="imei2" placeholder="..."><br>
 
</div>

 <div class="dua">
 Status Barang :
 <br><input type="text" name="status" placeholder="..."><br>
 Keterangan Barang :
 <br><input type="text" name="keterangan" placeholder="..."><br>
  
 </div>

<br>
</div>

<div class="khusus">
<button type="submit" name="btn-tmbhHP" onclick="berhasil()">Tambah</button>
<button ><a href="outputdataHP.php" style="color: black; text-decoration: none;">Lihat Semua Data Handphone</a></button>
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
	
		<input type="text" name="nt" placeholder="Cari kode Handphone disini..">
		<button type="submit" name="cari2" value="cari"  class="btn">Cari</button>
<h3 style="margin: 10px;"><b>Hasil Pencarian :</b></h3>
</form>
</div>

<?php
	require_once 'functionall.php';
  if(isset($_POST['cari2'])) {
		$cari = $_POST['nt'];
		$sqli = mysqli_query($db,"SELECT * FROM tbbaranghp WHERE kodebarang LIKE '%$cari%'");
		while($data = mysqli_fetch_array($sqli)){
?>

<div class="bloon2">

<form method="post">

	<table border="2" style="border:solid white;">
<tr>
	<td>Kode Barang</td>
	<td>Merk</td>
	<td>Tipe</td>
	<td>Serial Number</td>
	
</tr>
  
<tr>
	<td><input type="text" disabled="" name="kodebarang" value="<?php echo $data['kodebarang'];?>" style="width: 80px; height: 20px;"></td>
	<td><input type="text" name="merk" value="<?php echo $data['merk'];?>" style="width: 120px;"></td>
	<td><input type="text" name="type" value="<?php echo $data['type'];?>" style="width: 120px;"></td>
	<td> <input type="text" name="sn" value="<?php echo $data['sn'];?>" style="width: 120px;"><br></td>
	
</tr>

<tr>
	<td>IMEI 1	</td>
	<td>IMEI 2</td>
	<td>Status </td>
	<td>Keterangan</td>
	
</tr>
<tr>
	<td><input type="text" name="imei1" value="<?php echo $data['imei1'];?>" style="width: 120px;"></td>
	<td><input type="text" name="imei2" value="<?php echo $data['imei2'];?>" style="width: 120px;"></td>
	<td><input type="text" name="status" value="<?php echo $data['status'];?>" style="width: 120px;"></td>
	<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>" style="width: 120px;"></td>
	
</tr>

<tr>
	<td style="text-align: left; border:transparent;"><button type="submit" name="btn-delHP" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Tersebut ?')">Hapus</button>
	</td>
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
		border-radius: 3px;
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
	width: 590px;
	height: auto;
	margin-left: 740px;

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










