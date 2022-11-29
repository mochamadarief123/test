<?php 
// terhubung ke database dng cara modular
require 'functionskoneksi.php';

// ambil data di url
$id=$_GET["id"];

// query/ ambil data sesuai id
$mhs=query("SELECT * FROM mahasiswa WHERE id=$id")[0];


// cek apakah tombol submit sudah ditekan
if (isset($_POST["ubah"])) {


	if (ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil diubah.');
				document.location.href = 'index.php';
			</script>
		";
	} else
		echo "
			<script>
				alert('Data berhasil diubah.');	
				document.location.href = 'index.php';
			</script>
			";

}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>

<h1>Ubah Data Mahasiswa</h1>
<ul>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">

		<li>
			<label for="npm">NPM: </label>
			<input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>">
		</li>

		<li>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
		</li>

		<li>
			<label for="email">E-mail: </label>
			<input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
		</li>

		<li>
			<label for="jurusan">Jurusan: </label>
			<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
		</li>

		<li>
			<label for="gambar">Gambar: </label> <br>
			<img src="img/<?= $mhs['gambar'];?>"> <br>
			<input type="file" name="gambar" id="gambar">
		</li>

		<li>
			<button type="submit" name="ubah">Ubah Data!</button>
		</li>



	</ul>
</form>



</body>
</html>