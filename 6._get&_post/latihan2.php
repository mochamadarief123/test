<?php 

// cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) ||
		!isset($_GET ["tempat_lahir"]) ||
		!isset($_GET ["tgl"]) ||
		!isset($_GET ["hoby"]) ||
		!isset($_GET ["email"]) ||
		!isset($_GET ["foto"]) ) {
	// redirect --> memindahkan user dari sebuah halaman ke halaman lain
	header("Location: latihan.php"); //memaksa user kembali ke halaman pertama
	exit; //supaya script dibawah nya tidak dieksekusi
	
}



 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail Superhero</title>
</head>
<body>
<h1>TTL Detail Superhero</h1>

 	<ul>
 		<li><img src="img/<?= $_GET ["foto"]; ?>"></li>
 		<li>Nama:<?= $_GET ["nama"]; ?></li>
 		<li>Tempat Lahir: <?= $_GET ["tempat_lahir"]; ?></li>
 		<li>Tanggal: <?= $_GET ["tgl"]; ?></li>
 		<li>Hoby: <?= $_GET ["hoby"]; ?></li>
 		<li>E-mail: <?= $_GET ["email"]; ?></li>
	</ul>
<a href="latihan.php">kembali</a>



</body>
</html>