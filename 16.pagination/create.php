<?php 

// // terhubung kedatabase dgn cara biasa

// $conn= mysqli_connect("localhost", "root", "", "phpdasar");

// // cek apakah tombol submit sudah ditekan
// if (isset($_POST["submit"])) {
// 	//ambil data dari setiap elemen form
// 	$npm= $_POST["npm"];
// 	$nama= $_POST["nama"];
// 	$email= $_POST["email"];
// 	$jurusan= $_POST["jurusan"];
// 	$gambar= $_POST["gambar"];

// // query insert data
// $query= " INSERT INTO mahasiswa VALUES ('','$npm', '$nama', '$email', '$jurusan', '$gambar') "; 
// mysqli_query($conn, $query);

// // cek apakah data berhasil disimpan atau tdak
// if ( mysqli_affected_rows($conn) > 0 ) {
// 	echo "data berhasil disimpan.";
// } else
// 	echo "gagal menyimpan!!!";
// 	echo "<br>";
// 	echo mysqli_error($conn);

session_start();

// cek jika tidak ada session login
if ( !isset($_SESSION["login"]) ) {
	// maka tendang user ke halaman login
	header("location: login.php");
	exit;
}

// terhubung ke database dng cara modular
require 'functionskoneksi.php';

// cek apakah tombol submit sudah ditekan
if (isset($_POST["submit"])) {


	if (tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhsil ditambahkan.');
				document.location.href = 'index.php';
			</script>
		";
	} else
		echo "
			<script>
				alert('Data gagal ditambahkan.');	
				document.location.href = 'index.php';
			</script>
			";

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>

<h1>Tambah Data Mahasiswa</h1>
<ul>
	<form action="" method="post" enctype="multipart/form-data">
		<li>
			<label for="npm">NPM: </label>
			<input type="text" name="npm" id="npm" required>
		</li>

		<li>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" id="nama" required>
		</li>

		<li>
			<label for="email">E-mail: </label>
			<input type="text" name="email" id="email" required>
		</li>

		<li>
			<label for="jurusan">Jurusan: </label>
			<input type="text" name="jurusan" id="jurusan" required>
		</li>

		<li>
			<label for="gambar">Gambar: </label>
			<input type="file" name="gambar" id="gambar">
		</li>

		<li>
			<button type="submit" name="submit">Tambah Data!</button>
		</li>



	</ul>
</form>



</body>
</html>