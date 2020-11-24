<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
</head>
<body>
	<center>
		<h2><font color="RED">Data Mahasiswa Prodi Sistem Informasi</font></h2>
		<br/>
		<h3>Tambah Data</h3>
		<form method="post" action="tambah-proses.php">
			<table>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>NIM</td>
					<td><input type="number" name="nim"></td>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
</body>
</html>