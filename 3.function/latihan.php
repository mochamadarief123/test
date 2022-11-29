<?php 
	// date_default_timezone_set("asia/jakarta");
	// $b= time();
	// $a= date("G");{
	// 	if ($a >= 0 && $a <= 11) {
	// 		echo "pagi";
	// 	} elseif ($a >= 11 && $a <= 14) {
	// 		echo "siang";
	// 	} elseif ($a >= 14 && $a <= 17) {
	// 		echo "sore";
	// 	}
	// }

// penulisan function declarastion
// function penjumlahan($a, $b) {
// 		 $total= $a+$b;
// 		 return "$total";
// 		}

// penulisan function expression
$perkalian= function($a, $b){
			$total= $a * $b;
			return "$total";
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>latihan</title>
</head>
<body>
<?php echo $perkalian (100, 9);
	?>
</body>
</html>