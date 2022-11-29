<?php 
// koneksi ke database
$connection= mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
	global $connection;
	$result= mysqli_query($connection, $query);
	$boxs= []; //variabel baru utk menampung setiap melakukan pengambilan data(fetch) 

	while( $baju= mysqli_fetch_assoc($result) ) {

		$boxs[] = $baju;
	}

return $boxs;

}

 ?>