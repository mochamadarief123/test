<?php 
require 'functionskoneksi.php'; //cara menghubungkan halaman index dengan halaman functionskoneksi

$mahasiswa= query("SELECT * FROM mahasiswa");

 ?>

 <!DOCTYPE html>
<html>
<head>
	<title>halaman admin</title>
</head>
<body>
<h1>Daftar mahasiswa</h1>
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
		<td><a href="">ubah</a> |
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