<?php 

		//cek apakah tombol submit sudah ditekan
if ( isset($_POST["submit"]) ) {
		// cek user & password
if ( $_POST["username"] == "admin" && $_POST["password"] == "12345") {
		// jika benar, redirect ke halaman admin
	header("Location: admin.php");
	exit;
		// jika salah, tampilkan pesan kesalahan
} else {
		$salah= true;
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
</head>
<body>
<h1>Login untuk mengakses halaman Admin</h1>

<?php if ( isset($salah) ) :?>
	<p style="color: red;">ussername/password salah!</p>
<?php endif; ?>


<ul>
	<form action="" method="post">

	<li>	
		<label for="username">Username</label>
		<input type="text" name="username" id="username">	
	</li>
	<li>
		<label for="pass">Password</label>
		<input type="password" name="password" id="pass"> 
		
	</li>
		<button type="submit" name="submit">login</button>
	</form>
</ul>


</body>
</html>