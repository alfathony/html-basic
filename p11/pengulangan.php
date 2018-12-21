<!DOCTYPE html>
<html>
<head>
	<title>Pengulangan</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h2 class="text-center">Pengulangan</h2>

		<h4>Menggunakan While</h4>
		<?php 
		$loop = 1;
		while ($loop <= 10) {
			echo $loop . "<br>";
			$loop ++;
		}
		?>

		<h4>Menggunakan Do While</h4>
		<?php 
		$loop = 1;

		do {
			echo $loop . "<br>";
			$loop ++;
		} while ($loop <= 10);
		?>

		<h4>Menggunakan For</h4>
		<?php 
		$loop = 1;

		for ($i=$loop; $i <= 10; $i++) { 
			echo $i . "<br>";
		}
		?>
		
	</div>
</body>
</html>