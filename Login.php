	<?php
   session_start();
   if(isset($_SESSION['user'])) {
   header('location:Home.php'); }
   require_once("Koneksi.php");
?>


<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="css.css">
				<title> Delima Mandiri</title>
		</head>
<body>
<div class="welcome">
	
	<h3>~ SELAMAT DATANG ~</h3>
	
	<h4>Di Website Aplikasi Progam Invetaris CV Delima <br> Mandiri <br><hr style="border:1px solid;">Jl Dreded No 42 Kelurahan Empang Kec. Bogor<br> Selatan Kota Bogor, Telp. <0251> 832 4842</h4>

</div>

<br>
<div class="header">
	<div class="tHeader">

	<h2>INVENTARIA</h2>

	
	</div>
</div>

<br>
<div class="body"> 
	<div class="tBody">

	<form  action="proseslogin.php" method="post">	
		<h1>Login</h1>
	</div>

		 <input type="text" name="user" placeholder="Nama User">
		
		<input type="password" name="password" placeholder="Kata sandi">

		<br> 
		<input type="submit" value="Login" style=" height: 40px; background-color: white; color:black;  margin-top: 40px; margin-left: 30px; border-radius: 10px;  " >
<br>
<br>

		<a href="Register.php">Daftar</a>  |<a href="">Info</a>
<br>

</form>
 	</div>
 	<br><br><br><br><br><br>
<div class="created">
	<h3>CREATED BY :<br> MUHAMMAD REZA ALFARIDZY</h3>
</div>
 	
	</body>
</html>

<!----------------------------------->



<style type="text/css">
	body{
	background-image :url('img/pemandangan.png');
	color: white;
	font-family: Times New Roman;
	
	background-repeat: none;
}
.welcome{
	position: fixed;
	animation-name: gerakan;
	animation-duration: 1s;
	
}
@keyframes gerakan{

	0%{
		transform: scale(0);
		
	}
	25%{
		transform: scale(0.1);
		
		}
	50%{
		transform: scale(0.1;); 
		
	}
	75%{
		
		
	}
	100%{
		
	}
}


.header{
	width: 35%;
	height: 50px;
	border-radius: 7px;
	border:1px solid;
	margin: auto;
	animation-name: gerakanhead;
	animation-duration: 1.5s;
	
}
@keyframes gerakanhead{

	0%{
		transform: scale(0);
		
	}
	25%{
		transform: scale(0.1);
		
		}
	50%{
		transform: scale(0.1); 
		
	}
	75%{
		
		
	}
	100%{
		
	}
}



.body{
	width: 35%;
	height: 350px;
	border:1px solid;
	border-radius:7px; 
	margin: auto;
	animation-name: gerakanbody;
	animation-duration: 2s;

}


@keyframes gerakanbody{

	0%{
		transform: scale(0);
		
	}
	25%{
		transform: scale(0.1);
		
		}
	50%{
		transform: scale(0.1;); 
		
	}
	75%{
		
		
	}
	100%{
		
	}
}


.tBody{
	text-align: center;

}

.body input{
	width: 400px;
	height: 50px;
	border: none;
	color: white;
	font-size:20px;
	margin: 15px 0px 0px 30px; 
	background-color: rgba(0,0,0, 0.5);

	border-radius: 5px;
	
	
}
::placeholder {
	color: white;
	font-size: 20px;
	margin-left: 3px
}

button{
	width: 260px;
	height: 35px;
	border-radius: 5px;
	background-color: white;	
	border:1px solid;
	font-family: times new roman;
	font-size: 19px;
}
a{
	margin-left: 10px;
	color: white;
}
.created{
	color: rgba(220,220,220, 0.5);
	float: right;
	margin: 10px;
}
.tHeader h2{
	text-align: center;
	margin: 10px;
}
</style>




















