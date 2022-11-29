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

 ?>