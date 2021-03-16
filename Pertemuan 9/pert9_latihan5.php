<!DOCTYPE html>
<html>
<head>
	<title>GetDate</title>
	<style type="text/css">
		h3	{
			color: black;
		}
		h1 {
			color: green;
		}
		h2 {
			color: red;
		}
	</style>
</head>
<body>
	<center>
		<h1>
			<?php 
			$sekarang = getdate();
			$bulan = $sekarang['month'];
			$hari = $sekarang['mday'];
			$tahun = $sekarang['year'];
			$jam =  $sekarang['hours'];
			if ($jam <=11) {
				echo "Selamat Pagi";
			}elseif ($jam > 11 and $jam <=15) {
				echo "Selamat Siang";
			}elseif ($jam > 15 and $jam <= 18) {
				echo "Selamat Sore";
			}elseif ($jam > 18) {
				echo "Selamat Malam";
			}
			 ?>
		</h1>
		<h2>Welcome</h2>
		<h3>Muhammad Syah Rizal</h3>
		<h3>Sekarang adalah tanggal <?php echo "$hari $bulan $tahun"; ?></h3>
	</center>
</body>
</html>
