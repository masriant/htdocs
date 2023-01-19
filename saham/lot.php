<!DOCTYPE html>
<html>
<head>
	<title>Operator | Menghitung Volume Kubus</title>
	<link rel="stylesheet" type="text/css" href="css/cssnya.css"> 
</head>
<body>
	<div class="by">
		<p >&copy; 2021 - <a href="https://about.anandanesia.com/" target="_blank">IlhamTegarBintangAnanda</a></p>
 
	</div>
	<div class="kotak">
		<div class="border">
			<?php include 'fungsi.php' ?>
		</div>
		<form class="inputan" action="index.php" method="POST">
			<h2>Program Menghitung Volume Kubus</h2>
			<input type="number" name="panjangsisi" placeholder="masukkan panjang sisi kubus" autofocus>
			<input type="submit" name="hitung" value="Hitung Volume">
		</form>
		<div class="hasil">
		<?php 
			$panjang_sisi=$_POST["panjangsisi"];
			$volum=$panjang_sisi*$panjang_sisi*$panjang_sisi;
 
			echo "Diketahui Panjang Sisi Kubus = $panjang_sisi cm <br/>";
			echo "Volume = $volum cm3";
		exit();
		?>
		</div>
	</div>
</body>
</html>