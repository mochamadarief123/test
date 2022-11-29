<?php 
session_start();

// cek jika tidak ada session login
if ( !isset($_SESSION["login"]) ) {
	// maka tendang user ke halaman login
	header("location: login.php");
	exit;
}

require 'functionskoneksi.php'; //cara menghubungkan halaman index dengan halaman functionskoneksi

//PAGINATION
//konspigurasi

$jumlahDataPerhalaman= 3;
$jumlahData= count(query("SELECT * FROM mahasiswa")); //count= utk mengitung jumlah data di database
$jumlahHalaman= ceil($jumlahData / $jumlahDataPerhalaman); 
	//cara membulatkan bilangan ada 3:
	//round= membulatkan bilangan pecahan ke yg terdekat(1,2 dibulatkan jadi 1 | 1,7 dibulatkan jadi 2)
	//floor=  membulatkan bilangan kebawah (1,2 dibulatkan jadi 1)
	//ceil= membulatkann bilangan ke atas

if ( isset($_GET["halaman"])) {
	$halamanAktif= $_GET["halaman"];
} else {
	$halamanAktif= 1;
}

$awalData= ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$mahasiswa= query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman"); //LIMIT dari index ke,tampilkan data

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

<a href="logout.php" onclick="return confirm('Anda yakin mau keluar?')";>logout!</a>

<h1>Daftar mahasiswa</h1>

<form action="" method="post">
	<input type="text" name="key" size="50" autofocus 
	placeholder="masukan keywor pencarian.." autocomplete="off">
	<button type="submit" name="cari">Cari</button>
</form>
<br>
<br>

<!-- navigasi -->
<?php if($halamanAktif > 1 ) :?>
	<a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>



<?php for($i= 1; $i <= $jumlahHalaman; $i++): ?>
	<?php if( $i == $halamanAktif) : ?>
		<a href="?halaman= <?= $i; ?>" style="font-weight: bold; color: red; " ><?= $i; ?></a>
	<?php else :  ?>
		<a href="?halaman= <?= $i; ?> "><?= $i; ?></a>
	<?php endif; ?>
<?php endfor; ?>


<?php if($halamanAktif < $jumlahHalaman) :?>
	<a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

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
			<a href="hapus.php?id=<?= $baris["id"];?>" onclick="return confirm ('Anda yakin mau menghapusnya?')";>hapus</a>
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
<br>
<a href="create.php">Tambah Data!</a>

</body>
</html>