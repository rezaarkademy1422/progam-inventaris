<div class="content">
<?php
   session_start();
   require_once("Koneksi.php");
   $user = $_POST['user'];
   $pass = $_POST['password'];   
   $sql = "SELECT * FROM tbuser WHERE user = '$user'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo "<div>Username Belum Terdaftar! <a href='login.php'>Back</a></div>";
   } else {
     if($pass <> $hasil['password']) {
       echo "<div>Password salah! <a href='login.php'>Back</a></div>";
     } else {
       $_SESSION['user'] = $hasil['user'];
       header('location:Home.php');
     }
   }
?>
</div>
<style type="text/css">
  
body{
  background-image: url("img/pemandangan.png");
  background-size: cover;
  color:white;
  font-family: Comic Sans MS;
  font-size: 20px;
}
a{
  color: white;
}
.content{
  width: 500px;
  height: 50px;
  margin: 10px;
  background-color: rgba(0,0,0, 0.5);
  border-radius: 10px;
  text-align: center;
  box-shadow: 1px 1px 1px 1px white;
}



</style>