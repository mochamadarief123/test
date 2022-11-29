<?php 

// cara untuk menghilangkan seluruh sesion tanpa harus mengclose web
session_start();
$_SESSION=[];
session_unset();
session_destroy();

// meghapus cookie ketika klik logout
setcookie('id', '', time() - 3600 );
setcookie('key', '', time() - 3600 );

header("location: login.php");
exit;
 ?>