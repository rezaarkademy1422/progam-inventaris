	<?php
//Koneksi
$dbc = mysqli_connect('localhost','root','','dbdelimamandiri');
//Data Handphone 
 if(isset($_POST['btn-tmbhHP'])){
	mysqli_query($dbc, "INSERT INTO tbbaranghp VALUES(
		'$_POST[kodebarang]',
		'$_POST[merk]',
		'$_POST[type]',
		'$_POST[sn]',
		'$_POST[imei1]',
		'$_POST[imei2]',
		'$_POST[status]',
		'$_POST[keterangan]',
		'$_POST[foto]')");
 header('location: handphone.php');
}


if(isset($_POST['btn-delHP'])){
mysqli_query($dbc, "DELETE FROM tbbaranghp WHERE merk='$_POST[merk]'");
header('location: handphone.php');
}


//data karyawan

if(isset($_POST['btn-tmbhKR'])){
mysqli_query($dbc, "INSERT INTO tbkaryawan VALUES(
	'$_POST[nik]',
	'$_POST[namakaryawan]',
	'$_POST[bagian]',
	'$_POST[noktp]',
	'$_POST[tempatlahir]',
	'$_POST[tgllahir]',	
	'$_POST[jeniskelamin]',
	'$_POST[statusnikah]',
	'$_POST[alamat]',
	'$_POST[nohp]',
	'$_POST[pendidikanakhir]',
	'$_POST[jurusan]',
	'$_POST[tglmulaikerja]',
	'$_POST[tglkeluar]',
	'$_POST[foto]')");
 header('location: Karyawan.php');
}

if(isset($_POST['btn-delKR'])){
mysqli_query($dbc, "DELETE FROM tbkaryawan WHERE namakaryawan='$_POST[namakaryawan]'");
header('location: Karyawan.php');
}



//data laptop

if(isset($_POST['btn-tmbhLPT'])){
mysqli_query($dbc, "INSERT INTO tblaptop VALUES(
	'$_POST[kodebarang]',
	'$_POST[merk]',
	'$_POST[type]',
	'$_POST[sn]',
	'$_POST[status]',
	'$_POST[keterangan]',
	'$_POST[foto]')");
 header('location: Laptop.php');
}


if(isset($_POST['btn-delLPT'])){
mysqli_query($dbc, "DELETE FROM tblaptop WHERE merk ='$_POST[merk]'");
header('location: Laptop.php');
}
//data transaksi hp


if(isset($_POST['btn-tmbhTSHP'])){
mysqli_query($dbc, "INSERT INTO tbtransaksihp VALUES(
	'$_POST[tglpeminjaman]',
	'$_POST[kodebarang]',
	'$_POST[merk]',
	'$_POST[type]',
	'$_POST[sn]',
	'$_POST[imei1]',	
	'$_POST[imei2]',
	'$_POST[status]',
	'$_POST[keterangan]',
	'$_POST[noid]',
	'$_POST[nama]',
	'$_POST[jabatan]',
	'$_POST[pendidikanakhir]',
	'$_POST[jeniskelamin]',
	'$_POST[ttl]',
	'$_POST[alamat]',
	'$_POST[tahunmasuk]',
	'$_POST[nohp]',
	'$_POST[tglpengembalian]')");
 header('location: transaksiHP.php');
}

if(isset($_POST['btn-delTSHP'])){
mysqli_query($dbc, "DELETE FROM tbtransaksihp WHERE merk='$_POST[merk]'");
header('location: transaksiHP.php');
}

//data transaksi laptop

if(isset($_POST['btn-tmbhTSLPT'])){
mysqli_query($dbc, "INSERT INTO tbtransaksilaptop VALUES(
	'$_POST[tglpeminjaman]',
	'$_POST[kodebarang]',
	'$_POST[merk]',
	'$_POST[type]',
	'$_POST[sn]',
	'$_POST[status]',
	'$_POST[keterangan]',
	'$_POST[noid]',
	'$_POST[nama]',
	'$_POST[jabatan]',
	'$_POST[pendidikanakhir]',
	'$_POST[jeniskelamin]',
	'$_POST[ttl]',
	'$_POST[alamat]',
	'$_POST[tahunmasuk]',
	'$_POST[nohp]',
	'$_POST[tglpengembalian]')");
 header('location: transaksiLPT.php');
}

if(isset($_POST['btn-delTSLPT'])){
mysqli_query($dbc, "DELETE FROM tbtransaksilaptop WHERE merk='$_POST[merk]'");
header('location: transaksiLPT.php');
}

//stok barang

if(isset($_POST['btn-tmbhstok'])){
mysqli_query($dbc, "INSERT INTO tbstokbarang VALUES(
	'$_POST[kodebarang]',
	'$_POST[nama]',
	'$_POST[jenis]',
	'$_POST[ukuran]',
	'$_POST[satuan]',
	'$_POST[stockawal]')");
 header('location: stokbarang.php');
}


if(isset($_POST['btn-delstok'])){
mysqli_query($dbc, "DELETE FROM tbstokbarang WHERE nama ='$_POST[nama]'");
header('location: stokbarang.php');
}

//daftar 

if(isset($_POST['btn-tmbhDFTR'])){
mysqli_query($dbc, "INSERT INTO tbuser VALUES(
	'$_POST[no]',
	'$_POST[nama]',
	'$_POST[user]',
	'$_POST[password]',
	'$_POST[confirmpassword]')");
 header('location: Register.php');
}


 ?>