<!DOCTYPE html>
<html>
<head>
	<title>Latihan array</title>
	<style>
		.kotak{
			width: 30px;
			height: 30px;
			background-color: salmon;
			text-align :center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 1s;
		}
		.kotak:hover{
			transform: rotate(380deg);
			border-radius: 50%;
		}
		.clear{
			clear: both;
		}
	</style>
</head>
<body>

<?php 
// cara menampilkan array untuk user
$angka=[[1,2,3], [4,5,6], [7,8,9], [10,11]];
// cara menampilkan array multidimensi
// echo $angka[1][2]; --> menampilkan angka 6
// $angka=[1,2,3,4,5,6,7,8,9,10,11];
?>
<!-- pengulangan bersarang untuk array bersarang -->
	<?php foreach ($angka as $a) :?>
		<?php foreach ($a as $x) :?>
			<div class="kotak"><?= $x; ?></div>
		<?php endforeach; ?>
		<div class="clear"></div>
	<?php endforeach; ?>


</body>
</html>