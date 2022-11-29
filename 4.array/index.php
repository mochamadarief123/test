<?php
// array = variable yg dapat menampung banyak nilai/elemen
// elemen pada array itu boleh memiliki typedata yg beda
// typedata string menggunakan ["ada", "hah"] , typedata integer [1, 2]
// array adalah pasangan key dan value
// key nya adalah index, yg dimulai dari angka 0

// cara membuat array di php
// cara lama
$hari = array ("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "februari", "maret"];

// cara menampilkan seluruh elemen array
// bisa pakai var_dump() / print_r(). masing" menampilkan array yg berbeda

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// // cara menampilkan satu elemen array bisa menggunakan echo
// echo $hari[2];

// menambahkan elemen baru pada array diakhir elemen.
var_dump($hari);
echo "<br>";
$hari[]= "kamis";
$hari[]= "jum'at";
var_dump($hari);



?>