<?php 

// cara untuk menghilangkan seluruh sesion tanpa harus mengclose web
session_start();
$_SESSION=[];
session_unset();
session_destroy();

header("location: login.php");
exit;
 ?>