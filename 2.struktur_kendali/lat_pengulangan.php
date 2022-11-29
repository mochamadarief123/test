<!DOCTYPE html>
<html>
<head>
	<title>latihan1</title>
	<style>
		.warna1{
			background-color: blue;
		}
		.warna2{
			background-color: yellow;
		}
	</style>
</head>
<body>
	<table border="1" cellpadding="10" cellspacing="0">

		<!-- pengulangan -->
		 <?php for ($i=1 ; $i <= 10; $i++) :?>

				 	<!-- pengkondisian -->
				 	<?php if ($i % 2 == 1) :?>
				 	<tr class="warna1">
				 	<?php else :?>
					<tr class="warna2">
				 	<?php endif; ?>
				 	<!-- /pengkondisian -->

		<?php for ($j=1 ; $j <= 10; $j++) :?>
		 	<td> <?php echo "$i,$j"; ?></td>
		<?php endfor; ?>
			</tr>
		<?php endfor; ?>
		<!-- /pengulangan -->

	</table>
</body>
</html>