<?php 

$heroes=[
	[
		"nama" => "Spiderman", "tempat_lahir" => "tangerang", "tgl" => "19-juli-1998", "hoby" => "mancing", "email" => "spiderman@gmail.com", "foto" => "spiderman.jpg"
	],
	[
		"nama" => "Hulk", "tempat_lahir" => "los angels", "tgl" => "11-september-1977", "hoby" => "main bola", "email" => "hulkganteng@gmail.com", "foto" => "hulk.jpg"

	],
	[
		"nama" => "Antman", "tempat_lahir" => "new york", "tgl" => "12-juni-1005", "hoby" => "bulu tangkis", "email" => "antman@gmail.com", "foto" => "antman.jpg"
	],
	[
		"nama" => "Batman", "tempat_lahir" => "bandung", "tgl" => "5-januari-1999", "hoby" => "tidur", "email" => "batman009@gmail.com", "foto" => "batman.jpg"
	],

	[
		"nama" => "Captain America", "tempat_lahir" => "texas", "tgl" => "29-mei-1899", "hoby" => "sepak bola", "email" => "americancapt@gmail.com", "foto" => "captamerica.jpg"
	],

	[
		"nama" => "Captain Marvel", "tempat_lahir" => "pandeglang", "tgl" => "2-september-1999", "hoby" => "makan", "email" => "captainmarvels@gmail.com", "foto" => "captmarvel.jpg"
	],
	[
		"nama" => "Catwoman", "tempat_lahir" => "garut", "tgl" => "19-september-1997", "hoby" => "selfi", "email" => "catwomanbeatifull@gmail.com", "foto" => "catwoman.jpg"
	],
	[
		"nama" => "Thor", "tempat_lahir" => "sumedang", "tgl" => "29-maret-2009", "hoby" => "main layangan", "email" => "thor@gmail.com", "foto" => "thor.jpg"
	],
	[
		"nama" => "Thanos", "tempat_lahir" => "medan", "tgl" => "10-juni-1887", "hoby" => "koleksi batu akik", "email" => "thanosakik@gmail.com", "foto" => "thanos.jpg"
	],
	[
		"nama" => "Ironman", "tempat_lahir" => "garut", "tgl" => "10-juli-2000", "hoby" => "baca pikiran", "email" => "ironronman@gmail.com", "foto" => "ironman.jpg"
	],

];

?>

<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Superhero Blasteran Indo</h1>

			<ul>
				<?php foreach ($heroes as $hero) :?>
					<li>
						<a href="latihan2.php?nama=<?= $hero["nama"]; ?>& tempat_lahir=<?= $hero ["tempat_lahir"]; ?>& tgl=<?= $hero ["tgl"]; ?>& hoby=<?= $hero ["hoby"]; ?>& email=<?= $hero ["email"]; ?>& foto=<?= $hero ["foto"]; ?>">
							<?= $hero ["nama"]; ?></a>
					</li>
				<?php endforeach; ?>
			</ul>

</body>
</html>