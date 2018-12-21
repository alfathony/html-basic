<!DOCTYPE html>
<html>
<head>
	<title>Belanja</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<h2 class="text-center">Input Barang Belanjaan</h2>
		<p class="text-center">Masukan barang-barang yang ingin kamu beli</p>
		<div class="">
			<button onclick="onTambah()" class="btn btn-primary">Tambah +</button>
		</div>
		<hr>
		<form action="checkout.php" method="post" class="form">
			

			<div class="item" id="form">
				<div class="form-group item">
					<label>Nama Barang</label>
					<input type="text" name="barang[]" class="form-control" placeholder="Masukan nama barang"> 
				</div>

				<div class="form-group item">
					<label>Quantity</label>
					<input type="text" name="qty[]" class="form-control" placeholder="Masukan Quantity">
				</div>

				<div class="form-group item">
					<label>Harga</label>
					<input type="text" name="harga[]" class="form-control" placeholder="Masukan harga">
				</div>
				<hr>
			</div>



			<div class="form-group text-right">
				<input type="submit" name="submit" value="Beli Sekarang" class="btn btn-primary">
			</div>
			
		</form>
	</div>

	

	

	<script type="text/javascript">
		function onTambah() {
			var elm = document.getElementsByClassName('item')[0];
			var clone = elm.cloneNode(true);

			document.getElementById('form').appendChild(clone);
		}
	</script>
</body>
</html>