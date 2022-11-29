<?php 
session_start();
require 'functionskoneksi.php';

// cek cookie
if ( isset($_COOKIE["id"]) && isset($_COOKIE["key"])) {
	$id= $_COOKIE["id"];
	$key= $_COOKIE["key"];

	// ambil username berdasarkan id
	$result=mysqli_query($conn, "SELECT username FROM user WHERE id= $id" );
	$row= mysqli_fetch_assoc($result);

	// cek cookie dan username apakah sama?
	if ($key === hash('sha256', $row['username'])) {
		$_SESSION['login'] = true;
	}
}

if ( isset($_SESSION["login"]) ) {
	header("location: index.php");
}


// cek apakah tombol login sudah ditekan
if ( isset($_POST["login"])) {
	// tangkap semua data yg diinputkan user
	$username= $_POST["username"];
	$password= $_POST["password"];

	// cek apakah username ada di dlm database user
	$result= mysqli_query($conn, "SELECT * FROM user WHERE username= '$username'");

	// cek username
	if ( mysqli_num_rows($result) === 1) {
		
		// cek password
		$row= mysqli_fetch_assoc($result);

		//kebalikan dari password_hash
		if ( password_verify($password, $row["password"])) {
		// set session
		$_SESSION["login"]= true;

		// cek remember me
		if ( isset($_POST["remember"]) ) {

		// buat cookie
		setcookie('id', $row['id'], time() + 60);
		setcookie('key', hash('sha256', $row['username'], + 60));
		}

			header( "location: index.php" );
			exit;
		}  
	}

$error= true;

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman login</title>
	<style >
		label {
			display: block;
		}
	</style>
</head>
<body>

<h1>Halaman login</h1>

<?php if ( isset($error)) :?>

<!-- <p style=" color: red; font-style: italic;">password salah!!</p> -->
<?= "<script> 
	alert('password / username salah!!');
	</script>";?>

<?php endif; ?>

<form action="" method="post">

	<ul>
		<li>
			<label for="username">Username</label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Password</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<input type="checkbox" name="remember" id="remember">
			<label for="remember">Remember me</label>
		</li>
		<li>
			<button type="submit" name="login">Login</button>
		</li>
	</ul>
	

</form>




</body>
</html>