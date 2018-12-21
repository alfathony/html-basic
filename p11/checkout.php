<?php 

$getToday = date("l");

if ($getToday == "Sunday") {
	$today = "Minggu";
}elseif ($getToday == "Monday") {
	$today = "Senin";
}elseif ($getToday == "Tuesday") {
	$today = "Selasa";
}elseif ($getToday == "Wednesday") {
	$today = "Rabu";
}elseif ($getToday == "Thursday") {
	$today = "Kamis";
}elseif ($getToday == "Friday") {
	$today = "Jumat";
}else{
	$today = "Sabtu";
}

switch ($getToday) {
	case 'Sunday':
		$todayWithSwitch = "Minggu";
		break;
	case 'Monday':
		$todayWithSwitch = "Senin";
		break;
	case 'Tuesday':
		$todayWithSwitch = "Selasa";
		break;
	case 'Wednesday':
		$todayWithSwitch = "Rabu";
		break;
	case 'Thursday':
		$todayWithSwitch = "Kamis";
		break;
	case 'Friday':
		$todayWithSwitch = "Jumat";
		break;
	
	default:
		$todayWithSwitch = "Sabtu";
		break;
}


?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Checkout</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

 </head>
 <body>

 	<div class="container">
 		<h2 class="text-center">Checkout</h2>
		<p class="text-center">Hari ini <?php echo $today; ?> dan pastinya <?php echo $todayWithSwitch; ?></p>

 		<div class="mb-4"><a href="belanja.php" class="btn btn-primary">Belanja Lagi</a></div>
 		<table class="table">
	 		<tr>
	 			<th>No</th>
	 			<th>Barang</th>
	 			<th>Qty</th>
	 			<th>Harga</th>
	 			<th>Total</th>
	 		</tr>
	 		<!-- <pre>
	 			<?php print_r($_POST) ?>
	 		</pre> -->
	 		

	 		<?php 
	 			$no = 1;
	 			$total_bayar = null;

		 		for ($i=0; $i < (count($_POST['barang'])); $i++) { 

		 			// hitung total
		 			$total = $_POST['qty'][$i] * $_POST['harga'][$i];

		 			echo "
		 			<tr>
			 			 <td> " . $no . " </td>
				 		 <td> " . $_POST['barang'][$i] . " </td>
				 		 <td> " . $_POST['qty'][$i] . " </td>
				 		 <td> " . $_POST['harga'][$i] . " </td>
				 		 <td> " . $total . " </td>
			 		 </tr>
		 			";
		 			$no++;

		 			// total bayar
		 			$total_bayar += $total;
		 		}

	 		?>

	 		<tr>
	 			<th></th>
	 			<th></th>
	 			<th></th>
	 			<th>Diskon</th>
	 			<th>
	 				<?php if ($total_bayar	 >= 100000) {
	 					// Dapat diskom 10%
	 					$potongan = ($total_bayar * 10)/100;

	 					// printf("Potongan 10% menjadi %d <br/>", $potongan);

	 					echo "-10% <br>" . $potongan;

	 					$total_bayar = $total_bayar - $potongan;
	 				}else{
	 					echo "Tidak ada diskon";
	 				} ?>
	 			</th>
	 		</tr>

	 		<tr>
	 			<th></th>
	 			<th></th>
	 			<th></th>
	 			<th>Total Bayar</th>
	 			<th><?php echo intval($total_bayar) ?></th>
	 		</tr>
	 		

	 	</table>
 	</div>


 	
 </body>
 </html>