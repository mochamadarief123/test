<?php 
// build-in function
// date
// utk menampilkan tgl dengan format tertentu
// echo date("l, d-M-Y")

// time
// UNIX timestamp atauEPOCH time ( detik yg sudah berlalu sejak 1 jan 1970, tahun disepakati para ahli waktu utk komputer)
// bisa dipakai utk batas waktu diskon
// echo time();

// mencari tau 100 hari yg akan datang/ berlalu menggunakan function date dan time
// detik*menit*jam*hari
// echo date("l", time()+60*60*24*100)

// mktime (membuat sendiri detik yg kita mau)
// formatnya mktime (0,0,0,0,0,0)
// (jam, menit, detik, bulan, tanggal, tahun)
// echo date("l", mktime(0,0,0,7,19,1998));

// strtotime(kebalikan dari mktime)
// format memasukan tgl dan keluaran nya adalah detik
// echo date("l", strtotime("19 july 1998"));

// function string
// strlen() utk menghitung panjang string
// $a= "Hallo, nama saya Borip dan saya adalah programmer";
// echo strlen($a);

// strcmp() utk membandingkan dua buah string
// $a = "hello";
// $b = "Hello";
// if ( strcmp($a, $b) === 0){
// 	echo " sama persis";
// } else
// echo "beda atuh kabayan";


// explode() utk memecah sebuah string menjadi array
// $bagian= "bagian1 bagian2 bagian3 bagian4";
// $bagian= explode(" ", $bagian);
// echo $bagian [0];
// echo $bagian [1];
// echo $bagian [2];
// echo $bagian [3];

// htmlspecialchars()
// $string= htmlspecialchars("<a href= 'www.facebook.com'>facebook</a>", ENT_QUOTES);
// echo $string;

// utylity / utk bantuan
// var_dump() sebuah fungsi utk mencetak sebuah variabel, array
// $a = array(1, 2 array("borip", "anak", "vespa"));
// var_dump($a);

// isset() utk mengecek apakah sebuah variabel sudah pernah dibikin atau belum
// $a ="90";
// $x ="20";
// if (isset ($a)) {
// 	echo "udah pernah";
// } else {
// 	echo "belum bro";
// }

// empty() utk mengecek apakah variabel yg ada itu kosong atau tidak
// $a=1;
//  if (empty ($a)) {
// 	echo "tidak ada";	
// } else{
// 	echo "ada bro";
// }

// sleep() utk memberhentikan sementara program
// waktu saat ini
// echo date("h:i:s"). "\n";
// // waktu tidur
// sleep(8);
// // waktu bangun
// echo date("h:i:s"). "\n";

// die() utk memberhentikan program
// die();
// echo "broo";


// user-defined function (fungsi yg kita bikin sendiri)
// contoh

function salam() {
	return "Selamat "; 
}


date_default_timezone_set("Asia/Jakarta"); //Fungsi menggunakan waktu default sesuai waktu GMT
$b = time();
$hour = date("G",$b); // Fungsi untuk waktu 24 jam


function nama() {
	return " Borip!!";
}



 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>latihan function</title>
 	<style>
 		h1{
 			color: white;
 			font-size: 100px;
 			line-height: 0px;
 			padding-top: 200px;
 			text-align: center;
 			height: 100%;
 			font-family: sans-serif;

 		}

 		p{
 			color: white;
 			font-size: 20px;
 			padding-left: 180px;
 			line-height: 0px;
 			font-family: sans-serif;
 		}

 		body{
 			background-color: black;
 		}
 	</style>
 </head>
 <body>
 	<h1><?php echo salam (); 
 				if ($hour>=0 && $hour<=11){
				echo "Pagi,";
			} elseif ($hour >=12 && $hour<=14) {
				echo "Siang,";
			} elseif ($hour >=15 && $hour<=17) {
				echo "Sore,";
			} elseif ($hour >=17 && $hour<=18) {
				echo "Petang,";
			} elseif ($hour >=19 && $hour<=23)
			{	echo "Malam,";
				} 
			echo nama(); ?></h1>
		<p><?php echo date("l, d-M-Y");?></p>
		<p>Don't forget <?php 
					if ($hour >=0 && $hour <=11) {
					echo "breakfast";
				} elseif ($hour >=12 && $hour <=14) {
					echo "a cup coffee";
				} elseif ($hour >=15 && $hour<=17) {
					echo "time to relax";
				} elseif ($hour >=17 && $hour<=18) {
					echo "bath";
				} elseif ($hour >=19 && $hour<=23)
				{	echo "to imagine and one more cup of coffee";
					}
		 ?> today!</p>
 </body>
 </html>