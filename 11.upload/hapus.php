<?php 
require'functionskoneksi.php';

$id= $_GET["id"];

if (hapus($id) > 0) {
	echo "
			<script>
				alert('Data berhsil dihapus.');
				document.location.href = 'index.php';
			</script>
		";
}else
		echo "
			<script>
				alert('Data gagal dihapus.');	
				document.location.href = 'index.php';
			</script>
			";

 ?>