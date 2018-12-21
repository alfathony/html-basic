<!DOCTYPE html>
<html>
<head>
	<title>Input data</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<h2>Input Data</h2>
				<p>Silahkan isi informasi Biodata Anda</p>
				<hr>
				<form class="form" action="set-uts/process.php" method="POST">
					<div class="form-group">
					    <label for="exampleInputEmail1">Nama Lengkap</label>
					    <input type="text" class="form-control" placeholder="Isi nama lengkap" name="nama">
					 </div>
					 <div class="form-group">
					    <label for="exampleInputEmail1">NIM</label>
					    <input type="text" class="form-control" placeholder="Isi nim" name="nim">
					 </div>
					 <div class="form-group">
					    <label for="exampleInputEmail1">No Telepon</label>
					    <input type="text" class="form-control" placeholder="Isi no telepon" name="telepon">
					 </div>
					 <div class="form-group">
					    <label for="exampleInputEmail1">Alamat/label>
					    <textarea class="form-control" placeholder="Isi nama lengkap" name="alamat"> </textarea>
					 </div>
					 <div class="form-group">
					    <input type="submit" name="submit" class="btn btn-primary">
					 </div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>


<?php 

// echo "Nama : Abdul Latief Fathoni <br/>";
// echo "NIM : 41816110153 <br/>";
// echo "Alamat : Bintaro Coret<br/>";
// echo "Fakultas : Ilmu Komputer - sistem informasi <br/>";

?>