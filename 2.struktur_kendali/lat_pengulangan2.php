<!DOCTYPE html>
<html>
<head>
	<title>pengulangan</title>
	<style >
		.warna{
			background-color: royalblue;
		}
		.warna1{
			background-color: lightblue;
		}
	</style>
</head>
<body>
		<table border="1" cellpadding="20" cellspacing="0">
			<?php for ($i=1; $i <= 9; $i++) :?>
				<?php if ($i % 2 == 0) :?>
				<tr class="warna">
				<?php else :?>
				<tr class="warna1">
				<?php endif; ?>
				
					<?php for ($j=1; $j <= 15 ; $j++) :?>
						<?php if ($j % 2 == 0) :?>
						<td class="warna">
						<?php else: ?>
						<td class="wana1">
						<?php endif; ?>
							<?php echo "$i,$j"; ?>
						</td>
					<?php endfor; ?>
				</tr>
			<?php endfor; ?>

		</table>
</body>
</html>