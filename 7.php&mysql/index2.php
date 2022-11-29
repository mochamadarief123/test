<?php 
// koneksi ke database
// formatnya mysqli_connect("nama host", "username mysql", "passwor mysql", "nama databesnya");
// untuk masuk ke database sbg admin username= root pass= " "
$conn= mysqli_connect("localhost", "root", "", "phpdasar");


// ambil data dari tabel ...? / query data ...?
// format nya mysqli_query("koneksi ke database nya", "query nya ditulis dlm bntuk strring lalu masukan sintaks sql nya")
// pada saat melakukan query jika benar, query akan dilakukan tapi jika salah, query tidak akan dilakukan/ hanya mengembalikan nilai bool false
$result= mysqli_query($conn, "SELECT * FROM mahasiswa");
//cara mengecek error di result
// if ( !$result) {
// 	echo mysqli_error($conn);
// }


// /ambil data (fetch) mahasiswa dari object result/ ambil data mahasiswa dari tabel mahasiswa
// caranya ada 4
// mysqli_fetch_row() / mengembalikan array numeric
// myssqli_fetch_assoc() / mengembalikan array associative
// mysqli_fetch_array() / mengembalikan array numeric atau associative
// mysqli_fetch_object() / mengembalikan object
// $mhs= mysqli_fetch_object($result);
// var_dump($mhs->nama);


// while ($mhs= mysqli_fetch_assoc($result) ){
// 	var_dump($mhs);
// 	}





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
<?php while ($baris= mysqli_fetch_assoc($result)) :?>
	<tr>
		<td><?= $no; ?></td>
		<td><a href="">ubah</a> |
			<a href="">hapus</a>
		</td>
		<td><img src="img/<?= $baris["gambar"]; ?>" width="50"></td>
		<td><?= $baris["npm"]; ?></td>
		<td><?= $baris["nama"]; ?></td>
		<td><?= $baris["email"]; ?></td>
		<td><?= $baris["jurusan"]; ?></td>
	</tr>
<?php $no++; ?>
<?php endwhile; ?>



</table>




</body>
</html>