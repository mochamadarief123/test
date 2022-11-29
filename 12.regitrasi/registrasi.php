<?php 

require 'functionskoneksi.php';

// cek apakah tombol daftar sudah ditekan 
if ( isset($_POST["daftar"])) {
	
	if (daftar($_POST) > 0 ) {
		echo "<script>
				alert('berhasil mendaftar');
			</script>";
	} else
		echo mysqli_error($conn);


}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman registrasi</title>
	<style >
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1>Halaman registrasi</h1>

<form action="" method="post">

	<ul>
		<li>
			<label for="username">username :</label>
			<input type="text" name="username" id="username">
		</li>

		<li>
			<label for="password">password :</label>
			<input type="password" name="password" id="password">
		</li>

		<li>
			<label for="password2">confirm password :</label>
			<input type="password" name="password2" id="password2">
		</li>

		<li>
			<button type="submit" name="daftar">Daftar!</button>
		</li>

	</ul>
</form>






</body>
</html>