
<?php

//ambil id dari $_GET id
$id = addslashes($_GET['id']);
 
//query ke database
$query = mysql_query("SELECT * FROM tbl_karyawan WHERE foto='$foto'");
$row = mysql_fetch_assoc($query);
$image_db = $row['image'];
 
header("Content-type: image/jpeg");
 
echo $image_db;
?>