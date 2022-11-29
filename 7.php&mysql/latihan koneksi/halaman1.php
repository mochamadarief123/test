<?php 

require'halaman2.php'; //hubungkan halaman2 

$buku= query("SELECT * FROM buku");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar buku</title>
</head>
<body>

	<h1>Daftar buku special episode</h1>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No</th>
		<th>Cover Buku</th>
		<th>Kode Buku</th>
		<th>Nama Buku</th>
		<th>Tahun Terbit</th>
		<th>Pengarang</th>
		<th>Harga</th>
	</tr>	
<?php $i=1; ?>
<?php foreach ($buku as $item) :?>
	<tr>
		<td><?= $i; ?></td>
		<td><img src="../img/<?= $item["gambar"]; ?>" width="40"></td>
		<td><?= $item["kdbuku"]; ?></td>
		<td><?= $item["nmbuku"]; ?></td>
		<td><?= $item["thn_terbit"]; ?></td>
		<td><?= $item["pengarang"]; ?></td>
		<td><?= $item["harga"]; ?></td>
	</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>


</body>
</html>