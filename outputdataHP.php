<?php include 'koneksi.php'; ?>
<div class="back">
		<ul>
		<a href="handphone.php"><li><img src="img/back.png">	
	</li></a>
	<a href="home.php"><li><img src="img/home.png"></li></a>
	</ul>
</div>




<h1>Data Handphone :</h1>

<?php
require_once 'functionall.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tbbaranghp");
 while($data = mysqli_fetch_array($sql)){
 ?>

<div class="bloon">
 <form method="post">

<table border="2" style="border:solid white;">
<tr>
	<td>Kode Barang</td>
	<td>Merk</td>
	<td>Type</td>
	<td>Serial Number</td>
	<td>IMEI 1</td>
	<td>IMEI 2</td>
	<td>Status</td>
	<td>Keterangan</td>
	
</tr>
  
<tr>
	<td><input type="text" disabled="" name="kodebarang" value="<?php echo $data['kodebarang'];?>" style="width: 80px; height: 20px;"></td>
	<td><input type="text" name="merk" value="<?php echo $data['merk'];?>" style="width: 120px;"></td>
	<td><input type="text" name="type" value="<?php echo $data['type'];?>" style="width: 120px;"></td>
	<td> <input type="text" name="sn" value="<?php echo $data['sn'];?>" style="width: 120px;"><br></td>
	<td><input type="text" name="imei1" value="<?php echo $data['imei1'];?>" style="width: 120px;"></td>
	<td><input type="text" name="imei2" value="<?php echo $data['imei2'];?>" style="width: 120px;"></td>
	<td><input type="text" name="status" value="<?php echo $data['status'];?>" style="width: 120px;"></td>
	<td><input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>" style="width: 120px;"></td>
</tr>

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


.bloon{
	background-color: rgba(0,0,0, 0.5);
	margin: 10px;
	border-radius: 5px;
	width: 85%;

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
.back li{
	padding: 0;	
	list-style: none ;
	text-align: center;
	border: 1px solid ;
	border-radius: 5px;
	width: 200px;
	height: 40px;
	background-color: rgba(220,220,220, 0.5);
	transform: scale(1.2),auto;
	}

.back a{
	text-decoration: none;
	color: white;
}


.back li{
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
img{
	width: 30px;
	height: 30px;
	margin: 5px;
}
.back a{
	margin-bottom: -10px;
}

</style>

