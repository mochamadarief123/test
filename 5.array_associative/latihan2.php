<?php 
// $mahasiswa=[
// 	["Borip", "2018804295", "Sistem Informasi", "borip@gmail.com"],
// 	["Auza", "2018804645", "Ekonomi", "auzfree@gmail.com"]];

// array associative
// sama dengan array numerik, kecuali
// index/ key nya adalah string yg kita buat sendiri
// contoh array associative
$mahasiswa=[
	[
		"npm" => "2018804295", //mau ketuker nulis urutan nya gak masalah, asal key nya benar.
		"nama" => "Borip", 
		"jurusan" => "Sistem Informasi",
		"email" => "borip@gmail.com",
		"gambar" => "spiderman.jpg"
	],

	[
		"nama" => "Auzania", 
		"npm" => "2018803845", 
		"jurusan" => "Sistem Informasi", 
		"email" => "auzfree@gmail.com",
		"gambar" => "catwoman.jpg"
	],

	[
		"nama" => "Dodi", 
		"npm" => "2018827265", 
		"jurusan" => "Sistem Informasi", 
		"email" => "dod@gmail.com",
		"gambar" => "hulk.jpg"
		// "nilai" => [80,75,59]
	]

];

// echo $mahasiswa [1]["nama"]; 
// echo $mahasiswa [2]["nilai"][0]; //menampilkan nilai di array multidimensi

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan array</title>
 	<style>
 		ul{
 			float: left;
 		}
 	</style>
 </head>
 <body>
<h1>Daftar Mahasiswa</h1>

<?php foreach ($mahasiswa as $mhs) :?>

 	<ul>
 		<li>
 			<img src="img/<?= $mhs ["gambar"]; ?>">
 		</li>
 		<li>Nama:<?= $mhs["nama"]; ?></li>
 		<li>NPM: <?= $mhs["npm"]; ?></li>
 		<li>Jurusan: <?= $mhs["jurusan"]; ?></li>
 		<li>E-mail: <?= $mhs["email"]; ?></li>
 	</ul>
<?php endforeach; ?>
 </body>
 </html>