<?php 
// pengulangan pada array

// bisa mrnggunakan for/ foreach(pengulangan khusus array)
$angka=[1,32,33,56,78,2,4,7,56,6,88,12];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan menampilkan array</title>
 	<style>
 		.a{
 			width: 50px;
 			height: 50px;
 			background-color: lightblue;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;

 		}
 		.clear{ clear: both;}
 	</style>
 </head>
 <body>
<!-- count() berfungsi untuk menghitung elemen array otomatis -->
<?php for($i= 0; $i < count($angka); $i++) :?> 
 	<div class="a"><?php echo $angka[$i]; ?></div>
 <?php endfor; ?>

 	<div class="clear"></div>

<?php foreach ($angka as $n) :?>
	<div class="a"><?= $n; ?></div>
<?php endforeach; ?>


 </body>
 </html>