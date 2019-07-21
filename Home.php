<?php
session_start();
if(!isset($_SESSION['user'])) {
   header('location:Login.php'); 
} else { 
   $username = $_SESSION['user']; 
}
	
?>



<!DOCTYPE html>
<html>
<head>
	<title>Progam Invetaris</title>
</head>
<body>
<div class="menuatas">
	<img src="img/tabel2.png ">
		<img src="img/Icon DM.png " style="float: right; height: 60px; margin: 30px;">
	<h1>INVENTARIA</h1>
	<h3 style="margin-top: -10px;">Created by : Muhammad Reza Alfaridzy (SMKN 4 Bogor)</h3>

</div>


<div class="content">
	<div class="tContent">
		<h2>Selamat Datang User <i><?php echo "$username"; ?></i>, Di website Progam Invetaris CV Delima Mandiri</h2>
		<h4>JL Dreded No 42 Kelurahan Empang Kecamatan Bogor selatan Kota Bogor</h4>
			</div>

			<div class="header">
	<div class="menu-malasngoding">
 
		<ul>
			<li class="dropdown"><a href="#">Input Data</a>
				<ul class="isi-dropdown">
					<li><a href="Karyawan.php">Input Data Karyawan</a></li>
					<li><a href="Laptop.php">Input Data Laptop</a></li>
					<li><a href="Handphone.php">Input Data Handphone</a></li>
					<li><a href="transaksiHP.php">Input Data Transaksi Handphone</a></li>
					<li><a href="transaksiLPT.php">Input Data Transaksi Laptop</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"> Barang</a>
				<ul class="isi-dropdown">
					<li><a href="LaporanLPT.php" target="_blank" >Laporan Data Laptop</a></li>
					<li><a href="LaporanHP.php" target="_blank">Laporan Data Handphone</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"> Karyawan</a>
				<ul class="isi-dropdown">
					<li><a href="LaporanKR1.php" target="_blank">Laporan Karyawan Halaman 1</a></li>
					<li><a href="LaporanKR2.php" target="_blank">Laporan Karyawan Halaman 2 </a></li>
					<li><a href="LaporanKR3.php" target="_blank">Laporan Karyawan Halaman 3</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Transaksi HP</a>
				<ul class="isi-dropdown">
					<li><a href="LaporanTSHP1.php" target="_blank">Laporan Transaksi Handphone Hal. 1</a></li>
					<li><a href="LaporanTSHP2.php" target="_blank">Laporan Transaksi Handphone Hal. 2 </a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Transaksi Laptop</a>
				<ul class="isi-dropdown">
					<li><a href="LaporanTSLPT1.php" target="_blank">Laporan Transaksi Laptop Hal. 1</a></li>
					<li><a href="LaporanTSLPT2.php" target="_blank">Laporan Transaksi Laptop Hal. 2 </a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Stok Barang</a>
				<ul class="isi-dropdown">
					<li><a href="stokbarang.php">Input Data Stok Barang </a></li>
					<li><a href="LaporanStokBarang.php" target="_blank">Laporan Data Stok Barang </a></li>
				</ul>
			</li>
		</ul>
 
	</div>
<div class="menubawah">
<table>

<tr>
	<td>Info Selengkapnya  : </td>
	<td class="one"><img src="img/facebook.jpg"><a href="https://www.facebook.com/reza.c.pmr" target="_blank"> Muhammad Reza Alfaridzy </a></td>
	<td class="one"><img src="img/Logo 4.jpg"><a href="http://www.smkn4bogor.sch.id/" target="_blank"> SMKN 4 Bogor</a></td>
	<td class="one"><img src="img/tp.png"> Phone: (+62)(251)8324842</td>

</tr>
<tr>
	<td></td>
	<td><img src="img/Info.png"><a href="http://www.delimamandiri.com/" target="_blank"> www.delimamandiri.com</a>
	</td>
	<td><img src="img/twit.png"><a href="https://twitter.com/DelimaMandiri/" target="_blank"> @DelimaMandiri</td>
	<td><img src="img/mail.jpg"> info@delimamandiri.com</td>
</tr>
	
</table>
</div>

</div>
 





</div>

<div class="tools">
	
	<div class="dropdownn">
  <button class="mainmenubtn"><img class="pp" src="img/tools5.png"></button>
  <div class="dropdown-child">

    <a href=http://www.delimamandiri.com/ target="_blank"><img src="img/Icon DM.png"></a>
    <a href="logout.php"><img src="img/logout.png" onclick="return confirm('Apakah anda yakin ingin keluar ?')"></a>
    <a href=""><img src="img/info.png"></a>
  </div>
</div>
	
	
	</div>



</body>

</html>



<style type="text/css">

audio{
	width: 230px;
	height: 30px;
	position: fixed;
    object-color:red;
    display: none;
	
}	

body{
	background-image: url('img/batu.jpg');
	font-family: Times New Roman;
	color:white;
	background-size: cover;
	background-attachment: fixed;
}
	
.menuatas{
	width: 65%;
	height: 120px;
	border:1px solid;
	border-radius: 2px;
	background-color: rgba(0,5,5,0.5);
	margin: auto;

}
.content{
	
	width: 56%;
	background-color: rgba(0,5,5, 0.5);
	border:1px solid;
	border-radius: 2px;
	height: 500px;
	margin-left: 235px;
	position: absolute;
	
	
}
.tContent{
	 margin: 10px;
}

.tools{
	
	background-color: rgba(0,5,5,0.5);
	float: right;
	margin-right: 236px; 
	border:1px solid white;
	border-radius: 2px;
	width: 8%;
	height: 500px;
	
}

.Ttools{
	color: white;
	float: right;
}
.Ttools img{
	width: 25px; height: 25px; border-radius: 50%;
	
} 


	.menu-malasngoding{
		background-color:black;
	}
 
	.menu-malasngoding ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
 
	.menu-malasngoding > ul > li {
		float: left;
	}
 
	
	.menu-malasngoding li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
 
	.menu-malasngoding li a:hover{
		background-color: black;
	}
 
	li.dropdown {
		display: inline-block;
	}
 
	.dropdown:hover .isi-dropdown {
		display: block;
	}
 
	.isi-dropdown a:hover {
		color: #fff !important;
	}
 
	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color:rgba(0,0,0, 0.5);
	
	}
 
	.isi-dropdown a {
		color: white !important;
	}
 
	.isi-dropdown a:hover {
		color: #232323 !important;
		background: #f3f3f3 !important;
	}


.tools a{
	text-decoration: none;
	color: white;	
}


.tools img{
	width: 40px;
	height: 40px;
	margin-top: -15px ;
	margin-left: -10px;
}



.mainmenubtn {
    background-color: rgba(0,0,0, 0.5);
    color: white;
    border: none;
    cursor: pointer;
    padding:20px;
    margin:20px;
    width: 60px;
    height:50px;
    
    border-radius: 10px;
}
 

 
.dropdownn {
    position: relative;
    display: inline-block;
    transition: 3s;
}
.dropdown-child {
    display: none;
    width: 70px;
     transition: 2s;
}
.dropdown-child a {
    color: white;
    padding: 20px;
    text-decoration: none;
    display: block;
    margin:2px;

}
.dropdownn:hover .dropdown-child {
    display: block;
    margin: 20px;
    transition: 100s;
   

}




.pp:hover {
		transition: 0.1s;
		transform: rotate(-360deg);
}








.MenuKiri img{
	margin: 10px;
}

.menuatas img{
	width: 100px;
	height: 90px;
	float: left;
}
.menubawah{
	font-size: 15px;
	color: white;
	width: 100%;
	height: 80px;
	background-color: black;
	position: absolute;
	bottom: 0;
}
.menubawah img{
	width: 20px;
	height: 20px;
	border-radius: 50%;
}
.menubawah a{
	color: white;
}

table{
	margin: 10px;
}



</style>


