<?php 
session_start();

if ( isset($_SESSION["login"]) ) {
	header("location: index.php");
}

require 'functionskoneksi.php';

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
			<button type="submit" name="login">Login</button>
		</li>
	</ul>
	

</form>




</body>
</html>