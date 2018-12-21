<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$telepon = $_POST['telepon'];
$alamat = $_POST['alamat'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Process Hasil</title>
</head>
<body>
	Nama : <?php echo $nama; ?> <br>
	NIM : <?php echo $nim; ?> <br>
	Telepon : <?php echo $telepon; ?> <br>
	Alamat : <?php echo $alamat; ?> <br>
</body>
</html>