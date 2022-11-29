<?php 
require 'functionskoneksi.php'; //cara menghubungkan halaman index dengan halaman functionskoneksi

$mahasiswa= query("SELECT * FROM mahasiswa");

// cek apakah tombol cari sudah ditekan
if ( isset($_POST["cari"])) {
	$mahasiswa= cari($_POST["key"]);
}


 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
</head>
<body>
<h1>Daftar mahasiswa</h1>

<form action="" method="post">
	<input type="text" name="key" size="50" autofocus 
	placeholder="masukan keywor pencarian.." autocomplete="off">
	<button type="submit" name="cari">Cari</button>
</form>

<br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>aksi</th>
		<th>gambar</th>
		<th>npm</th>
		<th>nama</th>
		<th>email</th>
		<th>jurusan</th>
	</tr>

<?php $no=1; ?>
<?php foreach ($mahasiswa as $baris) :?>
	<tr>
		<td><?= $no; ?></td>
		<td><a href="ubah.php?id=<?= $baris["id"];?>">ubah</a> |
			<a href="hapus.php?id=<?= $baris["id"];?>"onclick="return confirm ('Anda yakin mau menghapusnya?')";>hapus</a>
		</td>
		<td><img src="img/<?= $baris["gambar"]; ?>" width="50"></td>
		<td><?= $baris["npm"]; ?></td>
		<td><?= $baris["nama"]; ?></td>
		<td><?= $baris["email"]; ?></td>
		<td><?= $baris["jurusan"]; ?></td>
	</tr>
<?php $no++; ?>
<?php endforeach; ?>



</table>

<a href="create.php">kembali</a>


</body>
</html>