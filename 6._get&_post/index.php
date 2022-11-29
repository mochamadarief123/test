<?php 
// materi request methode GET dan POST

//materi tambahan sebelum lanjut ke materi variabel superglobals
// variabel scope/ lingkup variabel {}
// $x= 10; //variabel lokal untuk file ini sendiri

// function munculX() {
// 	global $x; //keyword global disini fungsinya untuk mencara variabel diluar scope function
// 	// $x= 20; // variabel yg dibuat didalam function, berlaku untuk function itu sendiri/ variabel lokal utnk function itu sendiri
// 	echo $x;
// }

// // munculX();
// // echo "<br>";
// echo $x;


// superglobals adalah variabel2x yg sudah dimiliki oleh php yg bisa kita akses dimanapun/kapanpun, berbentuk varibel spesial. semuanya adalah array associative
// 1. $_GET
// $_GET ["nama"]= "Borip"; //cara mengisi array assosiatif
var_dump($_GET); //tampilnya hanya array tipe assosiatif yg kosong
// khusus utk $_GET ini ada cara lain utk memasukan data nya. cara nya menggunakan string didalam alamat url 
// tambahkan diakhir url dengan ? artinya skrg saya akan memasukan data kehalaman ini ke dlm $_GET
// cara nulisnya cukup buat pasangan antara key dan value dan pisahkan dengan = seperti di array assosiatif
// cara menambahkan data lagi bisa pake tanda & diikuti dng pasangan antara key dan value
// keterangan = data yg dikirim oleh methode requst GET akan ditangkap oleh variable superglobals yaitu $_GET

//methode request $_GET data yg dikirimkan terlihat di url




// 2. $_POST
// memerlukan form utk bisa bekerja dengan $_POST
// data yg dikirimkan tidak terlihat di alamat url



// 3. $_REQUEST
// 4. $_SESSION
// utk menjalankan session kita butuh function session_star()
// session adalah mekanisme penyimpanan informasi ke dlm variabel agar bisa dignkn di LEBIH DARI SATU HALAMAN
// informasi paa session disimpan di server


// 5. $_COOKIE
// utk membuat cookie kita butuh sebuah function setcookie()
// session adalah mekanisme penyimpanan informasi ke dlm variabel agar bisa dignkn di LEBIH DARI SATU HALAMAN
// informasi paa session disimpan di client/ browser

// cookie bisa digunakan utk
// *mengenali user(remeber me)
// *shoping cart/ kernjang belanja -> mencari belanjaan yg lain tanpa menghapus belanjaan yg sudah dipilih sblmnya
// *personalisasi -> utk mengetahui preferensi/ utk mengetahui perilaku seorang user misal, iklan rekomendasi dari histori pencarian si user (user ini kesukaan nya apa, kesenangan nya apa dll) / dignkn yutube. misal, user punya kesukaan menonton band tertentu nanti secara otomatis ytube menyaran kan video yg serupa

// cara membuat cookie
// di halaman1
// setcookie('key', 'values', tim()+60--> set umur cookie );

// di halaman 2
// $_COOKIE["key"]; 


// 6. $_SERVER
// 7. $_ENV

// var_dump($_ENV);
// echo $_SERVER["SCRIPT_FILENAME"]



 ?>