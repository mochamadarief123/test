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
		$gambar= htmlspecialchars($data["gambar"]);
	}
	
	$query= " INSERT INTO mahasiswa VALUES ('','$npm', '$nama', '$email', '$jurusan', '$gambar') ";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}


function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id= $id");
	return mysqli_affected_rows($conn);
}






 ?>