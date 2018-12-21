<?php 

// declare variable

$nama  = $_GET['nama_pemakai'];
$nim   = $_GET['nim'];
$absen = $_GET['absen'];
$tugas = $_GET['tugas'];
$uts   = $_GET['uts'];
$uas   = $_GET['uas'];

// total nilai
$total = ((0.1 * $absen) + (0.2 * $tugas) + (0.3 * $uts) + (0.4 * $uas));

?>


<!DOCTYPE html>
<html>
<head>
	<title>Hasil</title>
</head>
<body>
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo $nama; ?></td>
		</tr>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><?php echo $nim; ?></td>
		</tr>
		<tr>
			<td>Absen</td>
			<td>:</td>
			<td><?php echo $absen; ?></td>
		</tr>
		<tr>
			<td>Tugas</td>
			<td>:</td>
			<td><?php echo $tugas; ?></td>
		</tr>
		<tr>
			<td>UTS</td>
			<td>:</td>
			<td><?php echo $uts; ?></td>
		</tr>
		<tr>
			<td>UAS</td>
			<td>:</td>
			<td><?php echo $uas; ?></td>
		</tr>
		<tr>
			<td>Total</td>
			<td>:</td>
			<td><?php echo $total; ?></td>
		</tr>
	</table>
</body>
</html>