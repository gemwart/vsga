<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h4>Masukkan Biodata Anda : </h4>
	<form method="POST" action="cek.php">
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>tempat</td>
				<td><input type="text" name="tempat"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td><input type="text" name="jeniskelamin"></td>
			</tr>
			<tr>
				<td>Usia</td>
				<td><input type="text" name="usia"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="simpan"></td>
			</tr>
		</table>
	</form>
	<?php
		echo @$_GET['nama'];
		echo "<br/>";
		echo @$_GET['alamat'];
		echo "<br/>";
		echo @$_GET['tempat'];
		echo "<br/>";
		echo @$_GET['jeniskelamin'];
		echo "<br/>";
		echo @$_GET['usia'];
		echo "<br/>";
		echo @$_GET['submit'];
	?>
</body>
</body>
</body>
</html>