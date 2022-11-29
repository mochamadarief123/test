<?php 
// koneksi ke database
$conn= mysqli_connect("localhost", "root", "", "phpdasar");


function query($query){
	global $conn;
	$result= mysqli_query($conn, $query);
	$boxs=[];

	while ($box= mysqli_fetch_assoc($result)) {
		
		$boxs[]= $box;
	}

return $boxs;

}



function tambah($data){
	global $conn;
	if (isset($data["submit"])) {
		$npm= htmlspecialchars($data["npm"]);
		$nama= htmlspecialchars($data["nama"]);
		$email= htmlspecialchars($data["email"]);
		$jurusan= htmlspecialchars($data["jurusan"]);

		// upload gambar
		$gambar= upload();
		if ( !$gambar ) {
			return false;
		}

	}
	
	$query= " INSERT INTO mahasiswa VALUES ('','$npm', '$nama', '$email', '$jurusan', '$gambar') ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function upload(){

// ini data yg diambil dari variable superglobals $_FILES yg menangani gambar
	$namafile= $_FILES['gambar']['name'];
	$ukuranfile= $_FILES['gambar']['size'];
	$error= $_FILES['gambar']['error'];
	$tmpname= $_FILES['gambar']['tmp_name'];

// cek apakah gambar diupload atau tidak
	if ($error === 4) {
		echo "<script>
				alert('pilih gambar terlebih dahulu');
				</script>";
		return false;
		}


// cek apakah yg diupload adalah gambar
		$ekstensigambarvalid= ['jpg', 'jpeg', 'png'];
		$ekstensigambar= explode('.', $namafile); //explode adlh fungsi utk memecah sebuah str menjadi array
		// contoh hasil dari explode
		// borip.jpg = ['borip', 'jpg']
		$ekstensigambar= strtolower(end($ekstensigambar) ); // memaksa menjadi huruf kecil dan mengambil bagian titik yg terakhir

	// cek apakah $ekstensigambar ada di dlm array $ekstensigambarvalid
	if ( !in_array($ekstensigambar, $ekstensigambarvalid) ) {
			echo "<script>
				alert('ini bukan gambar');
				</script>";
		return false;
		}

	// cek gambar jika ukuran nya terlalu besar
	if ($ukuranfile > 2000000) {
		echo "<script>
				alert('ukuran gambar terlalu besar');
				</script>";
		return false;
		}	

	// jika lolos pengecekan diatas, gambar siap diupload
	// generate nama gambar baru
		$namafilebaru = uniqid();
		$namafilebaru .= '.';
		$namafilebaru .= $ekstensigambar;

	move_uploaded_file($tmpname, 'img/' . $namafilebaru);
	return $namafilebaru;

}


function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id= $id");
	return mysqli_affected_rows($conn);
}


function ubah($newdata){
	global $conn;
	if ( isset($_POST["ubah"])) {
		$id= ($newdata["id"]);
		$npm= htmlspecialchars($newdata["npm"]);
		$nama= htmlspecialchars($newdata["nama"]);
		$email= htmlspecialchars($newdata["email"]);
		$jurusan= htmlspecialchars($newdata["jurusan"]);
		$gambarlama= htmlspecialchars($newdata["gambarlama"]);

		// cek apakah user mengganti gambarnya
	if ($_FILES['gambar']['error'] === 4 ) {
			$gambar= $gambarlama;
		} else{
		$gambar= upload();
		}
	}

	$query= "UPDATE mahasiswa SET
			npm= '$npm',
			nama= '$nama',
			email= '$email',
			jurusan= '$jurusan',
			gambar= '$gambar'
			WHERE id=$id ";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}



function cari($key){

	$query= "SELECT * FROM mahasiswa WHERE 
			nama LIKE '%$key%' OR 
			npm LIKE '%$key%' OR
			email LIKE '%$key%' OR
			jurusan LIKE '%$key%'
			";
	return query($query);

}

function daftar($data){
	global $conn;

	$username= strtolower(stripslashes($data["username"]));
	$password= mysqli_real_escape_string($conn, $data["password"]);
	$password2= mysqli_real_escape_string($conn, $data["password2"]);

	// cek apakah username sudah ada atau belum
	$result= mysqli_query($conn, "SELECT username FROM user WHERE username= '$username' ");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
					alert('username sudah terdaftar');
			</script>";
			return false;
	}


	// cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('konfirmasi password tidak sesuai');
			</script>";
		return false;
	}

	// enkripsi password
	$password= password_hash($password, PASSWORD_DEFAULT);

	// tambahkan ke database
	mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')" );

	return mysqli_affected_rows($conn);

}

 ?>