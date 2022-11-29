<?php 

$mahasiswa = [
	["Mochamad Arief", "2018804295", "Sistem Informasi", "mochamadariefnurhidayat@gmail.com"],
	["Arief Borip", "2018801987", "Teknik Informatika", "boriparif@gmail.com"],
	["Robert Muhammad", "2018876899", "Manangement System", "robertaja@gmail.com"],
	["Auzania F Ramadhanty", "2018801998", "Analisist System", "auzania@gmail.com"],
	["Tiara Yulinda Putri", "2018801207", "Ekonomi", "putritiara@gmail.com"],
	["Ma'un santoso", "2018564467", "Teknik Sipil", "acanbinma'un@gmail.com"],
];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 	<h1>Daftar Mahasiswa</h1>

 	<table border="1" cellspacing="0" cellpadding="5">
		<tr>
			<td align="center">Nama</td>
			<td align="center">NPM</td>
			<td align="center">Jurusan</td>
			<td align="center">E-mail</td>
		</tr>
		<?php foreach ($mahasiswa as $mhs) :?>
	 		<tr>
	 			<td><?= $mhs [0]; ?></td>
	 			<td><?= $mhs [1]; ?></td>
	 			<td><?= $mhs [2]; ?></td>
	 			<td><?= $mhs [3]; ?></td>
	 		</tr>
 		<?php endforeach; ?>		
 	</table>


 </body>
 </html>