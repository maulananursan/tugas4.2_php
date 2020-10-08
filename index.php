<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	$j_saluran= 523;
	$j_terpakai= 8891;

	$rata=$j_terpakai/$j_saluran;
	

	?>
	<p>Jumlah Saluran = 523</p>
	<p>Jumlah terpakai = 8891</p>
	<p>Rata-rata Pemakaian = ...?</p>
	<p>Jawaban : <?php echo $rata; ?> Liter/Keluarga</p>

</body>
</html>
