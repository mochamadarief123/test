<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<!-- mengecek apakah tombol submit sudah ditekan -->
	<?php  if ( isset($_POST["submit"])) :?> 
		<h1>Selamat Datang, <?= $_POST["nama"]; ?> !!</h1>
	<?php endif; ?>

	<form action="" method="post">
		<label>Username: </label><input type="text" name="nama">
		<br>
		<button type="submit" name="submit">Kirim!</button>
	</form>




</body>
</html>